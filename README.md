# Development Guidelines

### Getting Started

1. Clone or download the repo to your machine.
2. Using the console, navigate to the project folder and run `npm install`.
3. You're all set! Optionally you can do a find a replace for any variables or namespaces if want to change the theme name.

---

### BEM
We follow the the principles of BEM ( Block-Element-Modifier ) in our front-end development. BEM is advantageous for a number of reasons:

1. It increases transparency between HTML, CSS, and Javascript.
2. It makes it easier for new developers to quickly get onboard with a project and understand what’s going on under the hood.
3. It keeps things maintainable and modular, even when sites get big.

If you’re unfamiliar with BEM, go to http://getbem.com/introduction/ for a rundown on using it.

---

**JavaScript :**

Unique 'js-' prefixed classes should always be used for targeting elements in javascript. These class names should be independent of ones used for any styling purposes. This keeps styling classes from getting muddled with javascript and makes it easy to look at the html and see what elements javascript is working with.
```js
$('.js-menu-toggle').click(function(e){
    e.preventDefault();
    $('.menu').toggleClass('menu--open');
});
```

---

### CSS
SCSS is used to build stylesheets.

#### Variables
Variables are located in the **/assets/css/sass/settings** directory.

#### Mixins
Mixins are located in the **/assets/css/sass/tools** directory. Currently, the only mixin that comes out of the box is for writing media queries. Feel free to add more.

#### State classes
In addition to modifier classes, state classes should be used to suggest, as the name implies, an element's *state*. State classes are always prefixed with `is-` or `has-`.

Here's an example of a dropdown in its "open" state:
```html
<ul class="dropdown is-open">
    ...
</ul>
```
```scss
.dropdown {
    height: 0;
    &.is-open { height: 100px; }
}
```

#### Utility classes
Utility classes are helpful, single (or limited) purpose, classes usually created for the styles you apply the most. Utility classes are always prefixed with `u-`. For example, centering an element is a very common practice and instead of having to write styles for every element that should be centered, we can write utility classes and include it in our markup:

```scss
.u-centered {
    max-width: 800px;
    margin: 0 auto;
}
```
```html
<article class="u-centered">
    ...
</article>
```

#### Flexible Units
Whenever size is being determined for something (font-size, width, height, margins, etc), `rem` and `em` units should almost always be used. This definitely goes for typography and in most cases can be applied to other elements. Using `rem` and `em` allows the site to be easily scaled by simple adjusting the font size of the root element (`<html>`) or the element from which a size is being inherited.

---

### Javascript
JS files should be created inside a source folder and then compiled into 1 main file for loading on the page. Each piece of the user interface should have it's own source file. Vendor libraries should be loaded in a vendor directory.
- **/js**
  - **/src**
    - *menu-toggles.js*
    - *sticky-nav.js*
    - *carousels.js*
  - **/vendor**
    - *jquery.min.js*
  - *main.js*
  - *main.min.js*

---

### Compiling
Grunt or Gulp are both acceptable tools for compiling CSS and JS.

---

### Frameworks

The following is a list of frameworks often used in our development. Please strongly consider whether additional libraries are necessary. The slimmer the better.

**CSS**

- [Bourbon](http://bourbon.io/) - a handy mixin library
- [Neat](http://neat.bourbon.io/) - a mixin library for creating grid systems.

NOTE: Please DO NOT use Bootstrap or any other framework which comes with a stylesheet of its own. Bourbon and Neat are mixin and function libraries and therefore do not get compiled. Exceptions are vendor stylesheets which may be necessary for some javascript libraries. If possible, please designate them to their own `.scss` file inside the `css/sass/shared/` folder.

**Javascript**

- [jQuery](https://jquery.com/) - self explanatory.
- [Slick Slides](http://kenwheeler.github.io/slick/) - a flexible JS library for creating carousels.
- [Modernizr](https://modernizr.com/) - browser feature detection.
- [Velocity](http://velocityjs.org/) - library for animating with javascript.

---

### Icons and Fonts
[Icomoon.io](http://icomoon.io) should be used to create icon fonts for the UI of the site. This includes things like arrows, social media icons, search icons, etc. Icomoon will let you export .ttf, .woff, and .svg versions of your icon fonts. Icon fonts as well as regular fonts for the site as a whole, if self-hosted, should be stored in a **/fonts** directory inside the theme.

Icon markup should use `<span>` tags with the appropriate attributes. **Important**: Use `aria-hidden` to hide from screen readers.

```html
<a href="/"><span class="icon icon-arrow-left" aria-hidden="true"></span> Back to the home page</a>
```

---

# Wordpress Guidelines


### Custom Post Types
We use the [extended-cpts library](https://github.com/johnbillion/extended-cpts) to easily create and manage custom post types.

### Custom Taxonomies
We use the [extended-taxos library](https://github.com/johnbillion/extended-taxos) to easily create and manage custom taxonomies.

### Custom fields
We use the [CMB2 library](https://github.com/WebDevStudios/CMB2) to create and manage custom fields in the backend.
Refer to the [CMB2 wiki](https://github.com/WebDevStudios/CMB2/wiki) for documentation.

### Functions and Includes
In addition to the functions.php file, the theme should have an `includes` folder which holds all necessary backend functions. It should look something like this:
- **/includes**
  - **/libraries**
    - **/cmb2**
    - *extended-cpts.php*
    - *extended-taxos.php*
  - *metaboxes.php*
  - *post-types.php*
  - *taxonomies.php*
  - *core.php* - aggregates the libraries, metaboxes, post types, and taxonomies.
- *functions.php* - includes core.php
