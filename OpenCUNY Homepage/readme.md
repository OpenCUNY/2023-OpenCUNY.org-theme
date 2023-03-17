# OpenCUNY.org Homepage WordPress Theme

## Project Description

A WordPRess theme for OpenCUNY.org, a digital medium funded by the DGSC, The Graduate Center, CUNY.

We've tried to make the code and documentation as human-readable, and instructive as possible, so that others can take this code and experiment, learn, have fun, and create. 

## Sections
- 
- [Quick Reference: CSS/HTML](#quick-reference-for-coding)
  - [CSS](#CSS)
  - [HTML](#HTML)
- [Quick Reference for Dashboard](#quick-reference-for-dashboard) 
- [How the Theme Works](#how-the-theme-works)
  - [File Structure](#file-structure)
  
## Quick Reference for Coding

### CSS
1, Style sheet is (generally) organized so that global styles are the top and page-specific tweaks are at the bottom. 

2. Keep the HTML readable by creating CSS class names that describe PURPOSE rather than VISUAL EFFECT when possible 
```
<img class="coordinator-pic" src="/cornelius.png">

/* is preferred to */
  
<img class="small left-align double-spaced" src="/cornelius.png>
```
3. Use relative length units, rem preferred 
  - i.e. em, ex, ch, rem, vw, vh, vmin, vmax, %
  - assume 1rem = 16px (on nearly all browsers)

3. Links to images in the theme folder need to use the php in the `<img src="">` of the following example
```
 <a href="https://cunydsc.org">
  <img src="<?php echo esc_url( get_template_directory_uri() . '/images/DGSC-logo.png' ); ?>" class="dgsc-logo">
 </a>
```
### HTML
1. Keep the theme flexible by using get_home_url() for site-wide links, like the following example
```
<h1 class="site-title"><a href="<?php echo get_home_url(); ?>" alt="Homepage link" id="site-title">Open*CUNY</a></h1>
```
2. Most of the content on the site is controlled by `.body-conent {}`.
The width of `.body-content {}` is maximum 800px and 100% of the window if smaller than 800px.

### Available fonts
- Bungee Inline is used for the .site-title
- Roboto (400) is the default font
- Roboto (900) is headers and `<b> <strong> <em>` tags
- Bungee Shade (so far unused)
- Roboto (so far other weights unused)

View on [Google fonts](https://fonts.google.com/share?selection.family=Bungee%20Inline%7CBungee%20Shade%7CRoboto:ital,wght@0,100;0,400;0,700;0,900;1,100;1,400;1,700;1,900)

### Colors
- Dark Blue:`#2682e9`
- Light Blue:`#ebf2fa`
- Pink:`#ff7c7d`
- Light Pink:`#faeded`
- Green:`#57f36e`
- Light Green:`#ebfaed`
- Yellow:`#feee75`
- Light Yellow:`#faf8eb`
 

## Quick Reference for the Dashboard
Dashboard > Theme > Appearence
- Site title displays in the meta, and the copyright footer block
- Menu Location > Footer Menu displays in the footer block
- Site tagline is meta only
- Header menu is so far unused

## How the Theme Works
### File Structure

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
  - .js (for javascripts that need to be loaded; currently used for accordion)
  - images (template-required images)
  - template-parts (sections of HTML inserted into other pages with get_template_part())
    - content.php (how most content is shown between header and footer)
    - content-login.php (the login form, used on the frontpage)
    - content-welcome.php (the welcome message for logged in users, used on the frontpage)
    - content-archive.php (lists the posts/pages in a category/tag with excerpts in date order, used on archive)
    
 ### To Do!
 - [X] code style.css to load in Dashboard > Themes
 - [X] Theme screenshot
 - [X] header.php loads
 - [X] footer.php loads
 - [X] 
 - [ ] Contact form
 - [ ] What can you do with OpenCUNY? (Yellow accordion)
 - [ ] OpenCUNY Board page (combine board/coordinators)
 - [ ] Remove blue footer (to site-wide footer) 

## Thanks
- https://youtu.be/-h7gOJbIpmo



