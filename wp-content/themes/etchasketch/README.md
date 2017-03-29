[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

etchasketch
===

###About
etchasketch is bases on the `_s` theme from Automattic, found [here](http://underscores.me).

We've added a few bits of functionality:
* Gulp is ready to go with some basic Sass and JS compiling
* WPAlchemy metaboxes are set up, you just need to move the `wpalchemy` folder from the theme directory to your `wp-content` directory
* Sass files are arranged in a more logical manner for a non-blog than that which ships from `_s`



Getting Started
---------------

Download or clone `etchasketch` from GitHub. The first thing you want to do is copy the `etchasketch` directory and change the name to something else (like, say, `megatherium`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'etchasketch'` (inside single quotations) to capture the text domain.
2. Search for `etchasketch_` to capture all the function names.
3. Search for `Text Domain: etchasketch` in style.css.
4. Search for <code>&nbsp;etchasketch</code> (with a space before it) to capture DocBlocks.
5. Search for `etchasketch-` to capture prefixed handles.

OR

* Search for: `'etchasketch'` and replace with: `'megatherium'`
* Search for: `etchasketch_` and replace with: `megatherium_`
* Search for: `Text Domain: etchasketch` and replace with: `Text Domain: megatherium` in style.css.
* Search for: <code>&nbsp;etchasketch</code> and replace with: <code>&nbsp;Megatherium</code>
* Search for: `etchasketch-` and replace with: `megatherium-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.


###Gulp
To get Gulp going, navigate to the theme directory in the command line and type:

	npm install

####WPAlchemy
Move the `wpalchemy` folder from your theme directory to `wp-content`.