# Custom Category Show OpenCart Module

## Overview
The Custom Category Show OpenCart Module is a custom add-on designed for the OpenCart e-commerce platform. This module enables administrators to display individual product categories on their storefront with enhanced customization options. You can add the title, sub-heading, image, description, and products belonging to the selected category to any section of your site, allowing for flexible and dynamic category presentations.

## Features
- **Enhanced Category Display:** Easily display custom categories with titles, sub-headings, images, descriptions, and products.
- **Product Assignment:** Assign products to custom categories to enhance their visibility and sales.
- **Admin Interface:** User-friendly interface integrated within the OpenCart admin panel for managing and displaying categories.
- **Compatibility:** Designed to work seamlessly with OpenCart 4.x and higher versions.

## MVC Architecture
The Custom Category Show OpenCart Module is developed using the MVC (Model-View-Controller) architecture, which organizes the codebase into three interconnected components:

- **Model:** Manages the data logic, handling the retrieval and manipulation of data related to custom categories and products.
- **View:** Handles the user interface, ensuring that the custom categories and products are presented correctly in the OpenCart admin panel and on the storefront.
- **Controller:** Facilitates the interaction between the Model and View, processing user inputs and updating the Model and View as necessary.

This architecture ensures a clean separation of concerns, making the module easier to maintain, extend, and test.

## Installation

1. **Upload the Module:**
   - Upload the `custom_category_show.ocmod.zip` file via the OpenCart Extension Installer.
   - Go to `Extensions > Modifications` and click on the `Refresh` button to apply the changes.

2. **Enable the Module:**
   - Navigate to `Extensions > Extensions > Modules`.
   - Find the `Custom Category Show` module in the list and click `Install`.
   - Once installed, click `Edit` to configure the module settings.

## Usage

1. **Activate the Module:**
   - After installing the module, go to `Extensions > Extensions > Modules`.
   - Find the `Custom Category Show` module and click `Install`.
   - Once installed, click `Edit` to configure the module settings.

2. **Create a Submodule:**
   - After enabling the main module, you need to create a submodule. Go to the `Custom Categories` section in the admin panel and create the submodule you need.

3. **Add Submodule to Layout:**
   - To display the custom categories on a specific page (e.g., home, contact), navigate to `Design > Layouts` in the admin panel.
   - Select the page where you want to display the custom categories.
   - Add the newly created submodule to the desired layout position (e.g., content top, content bottom, etc.).

4. **Assigning Products:**
   - Go to the product edit page and use the "Custom Categories" tab to assign the product to your custom categories.

## Requirements
- OpenCart Version 4.x or higher
- PHP 7.1 or higher

## Uninstallation
To remove the module, navigate to `Extensions > Extensions > Modules`, find `Custom Category Show`, and click `Uninstall`. This will remove the module and all associated data from your OpenCart store.

## License
This module is proprietary and is intended for internal use within the company. Redistribution or use outside the company is prohibited.

## Author
**Ehmedli Ehmed** - Okmedia MMC
