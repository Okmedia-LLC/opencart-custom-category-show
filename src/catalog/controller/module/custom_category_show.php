<?php
namespace Opencart\Catalog\Controller\Extension\CustomCategoryShow\Module;
/**
 * Class CustomCategoryShow
 *
 * @package
 */
class CustomCategoryShow extends \Opencart\System\Engine\Controller {
	/**
	 * @return string
	 */
	public function index(array $setting): string {
		$this->load->language('extension/custom_category_show/module/custom_category_show');

		$this->load->model('catalog/category');
		
		$this->load->model('tool/image');
		
		$data['categories'] = [];
		
		if (!empty($setting['category'])) {
			$categories = [];

			foreach ($setting['category'] as $category_id) {
				$category_info = $this->model_catalog_category->getCategory($category_id);

				if ($category_info) {
					$categories[] = $category_info;
				}
			}
			
		    $width = !empty($setting['width']) ? $setting['width'] : -1;
		    $height = !empty($setting['height']) ? $setting['height'] : -1;
		    
			foreach ($categories as $category) {
			    
				if ($category['image']) {
					$image = $this->model_tool_image->resize($category['image'], $width, $height);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $width, $height);
				}
				
				if(VERSION>='4.0.2.0') {
                    $description = oc_substr(html_entity_decode($category['description'], ENT_QUOTES, 'UTF-8'), 0);
                } else {
                    $description = Helper\utf8\substr(html_entity_decode($category['description'], ENT_QUOTES, 'UTF-8'), 0);
                }
				
				$data['categories'][] = [
					'category_id' => $category['category_id'],
					'name'        => $category['name'],
					'description' => $description,
					'thumb'       => $image,
					'alt'         => $category['name'] . " image",
				    'href'        => $this->url->link('product/category', 'language=' . $this->config->get('config_language') . '&path=' . $category['category_id'])
				];
			}
		}
		
		if ($data['categories']) {
		    $route = 'extension/custom_category_show/module/';
		    
            if (!empty($setting['twig_name']) && is_file(DIR_EXTENSION . "/custom_category_show/catalog/view/template/module/" . $setting['twig_name'] . '.twig')) {
                $route .= $setting['twig_name'];
            } else {
                $route .= 'custom_category_show';
            }
            
            return $this->load->view($route, $data);

		} else {
			return '';
		}
	}
}
