# Template

Project template for single page websites with HTML, SASS and JS (with jQuery).

### Version 0.1

- Just created;
- Almost perfect.

## Components

1. Index file on pure html;
2. SASS styles:
    - Layout parts (header, modal, footer);
    - Resources (breakpoints, colors, fonts, null style);
    - Mixin for responsive font sizes;
3. JavaScript:
    - Import jQuery;
    - Burger menu function;
    - Function for a modal window with a form;
4. PHP:
    - Import PHPMailer;
    - Configuration file for sending emails.

## How to use:

1. Create and fill ```.html``` files;
2. Write styles in ```style.scss```;
3. Make some magic with your godlike JS;
4. Fill all necessary fields in ```send.php```;
5. Check TODO to make sure you've done your best;
6. ???
7. Get cash and enjoy!

## Known issues

- WebStorm doesn't understand ```-webkit-fill-available``` in ```header.scss```, but it's alright;
- Webstorm reports a reference to a variable, mixin, or function that is declared in another file but this file isn't
  explicitly imported in the current file:  
  ```Element '$variable' is resolved only by name without use of explicit imports```.  
  Go to ```File``` > ```Settings``` > ```Editor``` > ```Inspections``` > ```Sass/SCSS``` and
  uncheck ```Missing import``` (or ```Resolved by name only``` on older versions)
- Some styles are overwritten, but that's done for better reliability in cross-platform

## TODO's

- Make better content example (with lots of useful JS libraries)
- Make React starter-kit in new branch