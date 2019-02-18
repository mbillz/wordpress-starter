# Wordpress Starter

_A modern Wordpress framework using Webpack, PostCSS, and Babel_

<a name="style"></a>

## Style Guide :nail_care:

- **Structure**

  - Theme development takes place in `/src`. JavaScript is written in `/src/js/` and CSS is written in `/src/css`. The Wordpress theme is developed in `/src/theme/`.

  - Custom page templates are placed in `/src/theme/page-templates`.

  - Single post type templates, archives, and category pages are placed in the root of theme in `/src/theme`.

  - Reusable modules that multiple templates throughout the theme call are placed in `/src/theme/inc` and called by the `get_template_part()` function as documented [in the Wordpress codex](https://developer.wordpress.org/reference/functions/get_template_part/).

  - Images used by the theme are placed in `/src/theme/img`.

  - When necessary, any vendor CSS or JS files are placed in `/src/theme/vendor` (as further described below).

- **CSS**

  - CSS is organized and written in a modular structure. All files are imported into `/src/css/index.css`. Organize files by feature or page. A reset.css is included in the repository.

  - [BEM](http://getbem.com/)

    - All CSS is written using BEM to maximize collaboration. BEM or Block Element Modifier is a methodology that helps you to create reusable components and code sharing in front-end development

    - [Getting Started Guide](https://en.bem.info/methodology/quick-start/)

  - If making any fundamental changes to previously written code, please ensure that the modifications won't break anything else on the site.

  - Third party CSS will be installed by npm and imported in `index.css`. If the package isn't available by npm, place the css file in a `/src/theme/vendor` and enqueue the CSS file in `/src/theme/functions.php`. Use conditional statements to only enqueue external files when needed.

- **JavaScript**

  - JS is organized and written in a modular structure. All files are imported into `/src/js/index.js`. Organized files by feature.

  - When possible, write in plain JavaScript without jQuery. jQuery brings unecessary file size into a website. Modern JavaScript has brought many features from jQuery into use.

    - [PlainJS](https://plainjs.com/javascript/) is a helpful tool for functions and strategies that replace jQuery methods.

  - At times, clients require outside libraries that have jQuery as a dependancy so it will need to be included. In this case, enqueue it properly in `/src/theme/functions.php` as described [here](https://digwp.com/2009/06/including-jquery-in-wordpress-the-right-way/).

  - Third party JS libraries will be installed with npm and import in the relevant JS file. If the package isn't available by npm, place the css file in a `/src/theme/vendor` and enqueue the CSS file in `/src/theme/functions.php`. Use conditional statements to only enqueue external files when needed.

- **Fonts**

  - Custom fonts are placed in `/src/fonts`.

  - Only .woff and .woff2 are necessary in modern browsers.
