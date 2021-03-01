# Warped v31

This is the 31st theme for my blog (warpedvisions.org). It's a mostly responsive WordPress theme designed for technical essays and readability. The theme was designed before WordPress added blocks, but still handles the old text and markdown styles.

This theme attempts to use WordPress intentfully, paired with simple semantic HTML5 and has a few JS functions for customizing the appearance of content (like anchors).

## Features

* uses Less for CSS
* uses pretifyjs for source
* simple + mostly semantic HTML
	* div/spans are for logical blocking (page and element grids)
	* section/article/header/footer equivalent page objects
	* other standard markup used where it makes sense (paragraphs -> p, headings -> h*, lists -> li, etc.)
* uses WP query functions safely/efficiently
	* combined a bunch of agency hacks here
* custom fields used for adding media (like podcasts) to posts
* makes a decent example of a hand-coded theme, without extra cruft and abstraction

### Tabloid custom page

A page template for homepages that look like newspapers.

* sticky posts used to pin items 
* categories are used for custom tabloid blocks
* tags are displayed under summary and in essay pages
* see `functions.php` for a list of query functions and parameters

### Blogcast feed

* Generates an RSS feed to aggregate podcasts to various services

### Other templates

* Basic page/post (full width, no sidebars)
* Standard header/footers
* Standard post loop variants