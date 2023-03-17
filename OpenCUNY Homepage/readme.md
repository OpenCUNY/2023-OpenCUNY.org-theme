# OpenCUNY.org Homepage WordPress Theme

## Project Description

A WordPRess theme for OpenCUNY.org, a digital medium funded by the DGSC, The Graduate Center, CUNY. 

## Sections
- Quick Reference: CSS/HTML
- Quick Reference: In the Dashboard 
- How the Theme Works
  -File Structure
  
## Quick Reference: Coding
**Helpful reference if you're editing or using the style sheet**

Style sheet is (generally) organized so that global styles are the top and page-specific tweaks are at the bottom. 

1. Keep the HTML readable by creating CSS class names that describe PURPOSE rather than VISUAL EFFECT when possible 
```
<img class="coordinator-pic" src="/cornelius.png">

/* is preferred to */
  
<img class="small left-align double-spaced" src="/cornelius.png>
```
2. Use relative length units, rem preferred 
  - i.e. em, ex, ch, rem, vw, vh, vmin, vmax, %
  - assume 1rem = 16px (on nearly all browsers)
3. Links to images in the theme folder need to use the php in the <img src=""> of the following example
```
 <a href="https://cunydsc.org">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/images/DGSC-logo.png' ); ?>" class="dgsc-logo">
 </a>
```
4. Keep the theme flexible by using get_home_url() for site-wide links, like the following example
```
<h1 class="site-title"><a href="<?php echo get_home_url(); ?>" alt="Homepage link" id="site-title">Open*CUNY</a></h1>
```
### Screen size
```
/* Most of the content on the site
   is controlled by*/
   
    .body-conent {}
```
The width of `.body-content {}` is maximum 800px and 100% of the window if smaller.

### Available fonts
Bungee Inline is used for the .site-title
Roboto (400) is the default font
Roboto (900) is headers and <b> <strong> <em> tags
Bungee Shade (so far unused)
Roboto (so far other weights unused)

View on [Google fonts](https://fonts.google.com/share?selection.family=Bungee%20Inline%7CBungee%20Shade%7CRoboto:ital,wght@0,100;0,400;0,700;0,900;1,100;1,400;1,700;1,900)

### Colors
Dark Blue:    `#2682e9`
Light Blue:   `#ebf2fa`
Pink:         `#ff7c7d`
Light Pink:   `#faeded`
Green:        `#57f36e`
Light Green:  `#ebfaed`
Yellow:       `#feee75`
Light Yellow: `#faf8eb`
 
## Files

This theme includes the two files requied by WordPress:
- index.php (blank because front-page.php is used instead)
- style.css (all CSS styling rules)

As well as additional files:

- main
  - 404.php (for 404 errors)
  - archive.php (handles categories and tags; used for site search and site map)
  - footer.php (for the footer)
  - front-page.php (landing page)
  - functions.php (code that pulls information from the WordPress DB for use on templates)
  - header.php (for header)
  - index.php (used to display a page or post)
  - readme.txt (this file)
  - screenshot.png (used by WordPress theme selector)
 - assets
  - images (template-required images)
  - .js (for javascripts that need to be loaded; currently used for accordion)
  - template-parts (sections of HTML inserted into other pages with get_template_part())
    - content.php (how most content is shown between header and footer)
    - content-login.php (the login form, used on the frontpage)
    - content-welcome.php (the welcome message for logged in users, used on the frontpage)
    - content-archive.php (lists the posts/pages in a category/tag with excerpts in date order, used on archive)
    
    
  ## What Works!
  - 
  
  ## What still needs to be done. . . 
  - 

## Thanks
- https://youtu.be/-h7gOJbIpmo



