# WP Projects and Testimonials Plugin (WPPT Plugin)
The WP Projects and Testimonials Plugin (WPPT Plugin) is a WordPress plugin that adds two custom post types (Projects and Testimonials) and a custom taxonomy (Client) to your WordPress website. This plugin is designed to help you showcase your projects and testimonials in a professional and organized manner.

## Installation
1. Download the WP Projects and Testimonials Plugin from the WordPress plugin repository or from the GitHub repository.
2. Upload the plugin to your WordPress website.
3. Activate the WP Projects Testimonials plugin through the 'Plugins' menu in WordPress.
4. Navigate to the WP Projects Testimonials settings page and configure the plugin options.

## Features

### Custom Post Types
The WPPT Plugin adds two custom post types to your WordPress website:

1. Projects (key: 'wppt_projects'): This post type allows you to create and display your projects on your website. Each project can have its own client and testimonials related to it.
2. Testimonials (key: 'wppt_testimonials'): This post type allows you to create and display your testimonials on your website. Each testimonial can have its own shortcode that can be used anywhere on your website.

### Custom Taxonomy
The WPPT Plugin also adds a custom taxonomy to your WordPress website:
Client: This taxonomy allows you to group your projects and testimonials by client.

### Templates
The WPPT Plugin comes with a single and archive template for the Projects post type. The single template includes specific information about the project, client information, and a related testimonial. The archive template displays all your projects in a grid format.

### Shortcode
Each testimonial created with the WPPT Plugin has its own shortcode that you can use anywhere on your website. You can display your testimonials in a slider or in any other way you like.

## Customization

###Customizing the Styles

You can customize the plugin's styles by modifying the style.scss file located in the scss folder of the plugin. To compile your Sass code into CSS, you'll need to have Node.js and npm installed on your system. If you don't have them installed, you can download them from the official Node.js website.

To compile your Sass code, follow these steps:

1. Open a terminal and navigate to the root folder of the WP Projects Testimonials plugin.
2. Run the following command to install the required npm packages:
`npm install`

3. Run the following command to compile your Sass code into CSS:
`gulp`
This command will watch for changes to your Sass files and automatically compile them into CSS. The compiled CSS file will be saved in the assets/css folder of the plugin.

To stop watching for changes, press `Ctrl+C` in the terminal.

## Support
If you encounter any issues with the WPPT Plugin, please don't hesitate to contact us at support@wpsafeandsound.com.

## Contribution
If you would like to contribute to the WPPT Plugin, please fork the repository and submit a pull request.

## License
The WPPT Plugin is licensed under the GPL-2.0 license. You are free to use, modify and distribute this plugin as per the terms of the GPL-2.0 license.
