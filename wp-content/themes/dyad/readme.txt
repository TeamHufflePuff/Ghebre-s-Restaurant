=== Dyad ===

Contributors: automattic
Tags: responsive-layout, custom-colors, custom-header, custom-menu, editor-style, featured-images, rtl-language-support, sticky-post, translation-ready, photoblogging, blue, yellow, dark, threaded-commentsRequires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Dyad Theme, Copyright 2015 Automattic
Dyad is distributed under the terms of the GNU GPL


== Description ==
Dyad pairs your written content and images together in perfect balance. The theme is geared towards photographers, foodies, artists, and anyone who is looking for a strong photographic presence on their website.


== Installation ==
	
1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.


== Frequently Asked Questions ==

= How do I set up the Featured Content slider? =

The Featured Content slider can be seen on the theme's demo site, https://dyaddemo.wordpress.com. To add to your site:

1. Install and activate the Jetpack plugin.
2. Go to Customizer > Featured Content from the WP Admin Dashboard. Enter a tag that you would like to use on Featured Content posts. For example, you could use the tag 'featured'.
3. Add that tag on posts on your website and they will appear in the Featured Content slider. Note: only tagged posts with a Featured Image in the slider.


= Does this theme support any plugins? =

Dyad includes support for Infinite Scroll and Featured Content in Jetpack.


== Credits ==

* Based on Underscores http://underscores.me/, (C) 2012-2015 Automattic, Inc., [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* normalize.css http://necolas.github.io/normalize.css/, (C) 2012-2015 Nicolas Gallagher and Jonathan Neal, [MIT](http://opensource.org/licenses/MIT)
* slick.js, (C) Ken Wheeler. [MIT](http://opensource.org/licenses/MIT)
* Lato font, (C) Łukasz Dziedzic. [SIL Open Font License, 1.1] (http://scripts.sil.org/OFL)
* Noto Serif font, (C) Google. [Apache License, version 2.0] (http://www.apache.org/licenses/LICENSE-2.0.html)
* Genericons, (C) 2015 Automattic, Inc. [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)
* ImagesLoaded (C) Tomas Sardyha and David DeSandro.[MIT](http://opensource.org/licenses/MIT)
* Images used in screenshot from Unsplash http://unsplash.com [CC0 1.0] (http://creativecommons.org/publicdomain/zero/1.0/). From top to bottom:
     * https://unsplash.com/photos/eqsEZNCm4-c
     * https://unsplash.com/photos/Dq5g1u1eg1Q
     * https://unsplash.com/photos/VR28K9_iRgc
     * https://unsplash.com/photos/QlnUpMED6Qs
     * https://unsplash.com/photos/N_Y88TWmGwA
     * https://unsplash.com/photos/jivmv9hE6bM
     * https://unsplash.com/photos/0RUlEosIP8Y
* Fork of the Receptar theme by WebMan Design (https://en-ca.wordpress.org/themes/receptar). Copyright (c) 2015 WebMan (http://www.webmandesign.eu/) [GPLv2 or later](https://www.gnu.org/licenses/gpl-2.0.html)


== Changelog ==

= 22 April 2016 =
* Remove check for is_paged. The featured content should display on all pages of posts if enabled, not just the first one.

= 20 April 2016 =
* Build out styles for Evenbrite template, so it is usable when used with theme.

= 5 April 2016 =
* Tweak z-index on posts to make menu accessible again.
* Fix issue with site description in banner  no longer displaying when header text is off. It's not part of the header so it should still display.

= 4 April 2016 =
* Improve UX for site description in Customizer:

= 1 April 2016 =
* Reduce z-index on header so Customizer edit buttons are still accessible.

= 22 March 2016 =
* Removing unnecessary parseInt and tweaking variable names to make more consistent - basically tidying up before suggesting as fix to theme shops with similar issues.

= 15 March 2016 =
* Improving JS behaviour for setting min-height for Facebook widget. Removing fallback heights from CSS.

= 10 March 2016 =
* Fix issue with empty() check not working in older versions of PHP; reported by .org user.

= 5 March 2016 =
* Update check for screensize, to make sure it's fired in functions rather than just once. Tweak window resize function.
* Refine the masonry widget behaviour further, specifically:

= 4 March 2016 =
* Adjust when Masonry fires, to improve behaviour with widgets. Specifically, adding a check for when Facebook widget is loaded, and updating layout. Also using JavaScript to set a min-height for Twitter widgets.

= 24 February 2016 =
* Hide the sidebar DIV on the eventbrite page template, since this theme's sidebar appears in the footer.

= 15 February 2016 =
* Wrap avatars in spans rather than diffs; add check to make sure span is not added in admin view.
* Remove unnecessary prefixing from scripts. Bump version number.

= 11 February 2016 =
* Expanding on credit and license information for photos in screenshot.
* Add credit and license information for images used in screenshot. Bumping version number.

= 4 December 2015 =
* Ensure that .site-banner-header exists to avoid JS errors.

= 3 December 2015 =
* Adding overflow:hidden to site-content to prevent elements overflowing main site container; Fixes #3542;

= 20 November 2015 =
* Editor style edit.

= 17 November 2015 =
* Make sure to call loop-banner.php when it's appricable.

= 16 November 2015 =
* Adjusting z-index of slideshow, to fix issue with it not being clickable in Safari.
* Condition change to call content-featured-img.php

= 13 November 2015 =
* Switching direction of third+ level of menu flyouts. Prevents flyouts from going off screen for at least three levels on iPad, and more on desktop.
* Rename file used to display featured images in banner space, since it's no longer only used for the front page.

= 12 November 2015 =
* Add check to make sure 'Add Yours' comment link doesn't overshoot the form when the header is fixed.
* Only show 'Add Yours' comment reply link if the comments are actually open.
* Making selectors more specific to fix issue with alternating icons in RTL styles.
* Adding a check to make sure there's actually a site description to show before outputting it on static front page featured image and custom header.
* Hiding post icon for no-results posts.

= 11 November 2015 =
* Fleshing out readme.txt, including adding desctiption, tags, changelog and steps to add featured content slider to site.
* Adding a theme description.
* Tidying up JavaScript to remove console.log
* Minor tweak to gradient placement in blog index, archive, etc.
* Tweaks to gradient in blog, archive view of posts. Tidying things up a bit while trying to fix the weird 1px gap issue in Chrome.
* Fixing issues with logo and site title display.
* Darkening gradient behind text on slideshow; hiding gradient on image format posts. Removing widont filter from titles to fix weird word wrap breaks in blog index view.
* Removing unneeded word-wrap style; updating screenshot with current version of demo site.
* Adding generated GlotPress project.
* Tweaking JavaScript selectors to prevent error; changing masonry selector so it will also pick up divs.
* Adjusting widget styles. Moving appropriate widgets from wpcom specific stylesheet into regular styles. Fixing RTL widget width styles.
* Tweaks to RTL styles and widget styles for image post format layout.
* Tweaking styles for image posts, to make design more consistent and fix minor layout issues.

= 10 November 2015 =
* Adding support for image post formats. Adding styles to allow image posts to display the image at the top of the page at full width.
* building out function and styles to prevent header from overlapping slideshow content.
* Simplifying body class function.
* Adding styles for posts without featured images. Removing social icon styles from regular widget menu.
* Updating masonry layout in Customizer preview when font size is updated.
* Minor style updates, including:
* Reducing width of text overlaid on slideshow for easier readability. Adjusting spacing around navigation, so the dropdown always works, and things don't look too crowded.

= 9 November 2015 =
* Removing custom comments markup, and updating styles to maintain  most of the original design with the default markup. Adding function to wrap avatars in div.
* Theme tweaks, including:
* Theme tweaks, including:
* Updates from breaking feedback, including:
* Deleting unused images folder.
* Fixing whitespace and WPCS warnings.

= 6 November 2015 =
* Last minute

= 2 November 2015 =
* Removing unused custom background (since it's not visible). Adding tags to style.css

= 31 October 2015 =
* Reduce spacing around single post header; reduce content width on posts with no featured image.
* Tweaks for colour annotations and minor spacing adjustment.

= 30 October 2015 =
* Simplify social menu styles; adding fallback icon for social menu for not supported service links.
* Making sure only one image size is loaded on single posts/pages; different sizes are referenced for different screen sizes, but the specific screen size should only load one.
* Removing old screenshot; replacing with PNG version of new screenshot.
* Fix issue with gradient behind text not appearing for single featured posts
* Fixing alignment issue with menu that was affecting dropdowns in RTL styles.
* Fixing RTL styles for calendar widget; fixing styles for blockquotes to better suite theme
* Fixing styles for author grid, author list widgets
* Building out and fixing styles for widgets. Adjusting widget width and tweaking JS timeout to improve masonry behaviour/appearance.
* Style adjustments, including
* Adjust comment, widget widths on single posts/pages with featured images.

= 29 October 2015 =
* Various style tweaks, including:
* Un-centering social sharing, likes and related posts - all three can't be centered correctly, so aligning left
* General style fixes, including:
* Updates to theme, including:

= 28 October 2015 =
* Nitpicky formatting
* Removing unneeded smoothscroll function. Fixing small issue in function that works around too-tall content in the grid view on index, archive, search pages.
* Remove empty placeholder on mobile screens when there is no featured image on a post index, archive, search view.
* Minor style tweaks, including:
* Making static front page spacing more consistent with regular pages. Making Featured Image on static front page override featured post slideshow if present.
* Replace image with background image in index, search, archive grid view, for better image centring.
* Swap figure for div where semantic.

= 27 October 2015 =
* Adding social media menu and styles; hiding wpstats smiley
* Removing unused sidebar file.
* Fixing reference to featured image to make sure the full-sized one is grabbed.
* Reducing size of banner image; switching to background image with cover size, to improve scaling the image up on larger screens.
* Add previous/next posts links; add styles and RTL styles for links.
* Building out styles for post sharing, liking, related posts. Removing numbered pagination from index and search (to be replaced). Removing unused post navigation function.

= 26 October 2015 =
* Updating classes and styles to fix issue with filler design showing up with Featured tag, even though it should be one or the other.

= 23 October 2015 =
* Increasing size of featured image; adjusting line height in header.
* Removing console logs from JS; building out widget styles, making minor tweaks to header and adding corresponding RTL styles.
* Removing empty css folder.
* Move editor-style.css into root of theme to simplify folder structure.
* Build out widget styles; adjust logo and header styles to allow for larger logos and better fallback without.
* Building out WP.com specific styles.
* Update widget header tag; removing unused variables.
* Add second firing of Masonry to ensure widgets loading from third party sites (like Facebook) are finished loading before updating layout.
* Increase logo size
* Add file for WP.com-specific styles
* Moving from dev directory into pub directory
