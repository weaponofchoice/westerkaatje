!! Still very much in development !!

Wordpress Elements
==============================

This is a Wordpress framework, which can be used in a variety of ways. It contains a wordpress setup with a multiple server config method and wordpress as a submodule. It also has a basic wordpres theme. It contains elements like a gallery, grid, text block and more. To make it even easier, there's also an Advanced Custom Fields(ACF) export file so you don't have to manually add these with every install.

Although this framework is initially build for onepagers, of course it can easily be used to make larger websites.

Wordpress Elements initially assumes a setup with these dependencies:
- You have multiple servers(local, development, production)
- You have an Advanced Custom Fields(ACF) license key

1. Git clone git@github.com:LucAwater/Wordpress-Elements.git .
2. Git submodule init
3. Git submodule update
4. Go to http://yourwebsite.com/wordpress/wp-admin
5. Install all plugins
6. Activate 'Elements' theme
7. import 'acf.json' file in ACF
8. Begin building something awesome

## Classnaming & writing sass

### Classnames
```
.block_kind-variation 
  .has_no-something
  .has-something
  .has_something-otherthing (example: .has_background-dark)
  
  .is_not-something
  .is-something
  .is_something-otherthing (example: .is_aligned-center)
```

### Sass guidelines

- One selector per line
- Single space before opening bracket
- Extends come first
- Includes come second
- Then the rest in three blocks: positioning, display & box model and other
- Use 2 soft tabs(spaces)
- 

```
.selector-1,
.selector-2 {
  @extend something;
  @include mixin();
  @include another-mixin();
  
  /* Positioning */
  position: absolute;
  z-index: 10;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;

  /* Display & Box Model */
  display: inline-block;
  overflow: hidden;
  box-sizing: border-box;
  width: 100px;
  height: 100px;
  padding: 10px;
  border: 10px solid #333;
  margin: 10px;

  /* Other */
  background: #000;
  color: #fff;
  font-family: sans-serif;
  font-size: 16px;
  text-align: right;
}
```

## Database custom fields

block_section_element_subelementVariation

h = header
c = content
o = options
--------------------------
hero_banner

hero_c_image
hero_c_title
hero_c_text

hero_o_c_textColor
--------------------------
text_c_title
text_c_text

text_o_c_pos
text_o_c_align
--------------------------
gridPri_h_title
gridPri_h_text

gridPri_c_images

gridPri_o_h_pos
gridPri_o_h_align
gridPri_o_c_layout
--------------------------
gridSec_h_title
gridSec_h_text

gridSec_c_item
gridSec_c_item_image
gridSec_c_item_title
gridSec_c_item_text

gridSec_o_h_pos
gridSec_o_h_align
gridSec_o_c_layout
--------------------------
slider_h_title
slider_h_text

slider_c_images

slider_o_h_pos
slider_o_h_align
--------------------------
parallax_c_image


### Project setup w/ Wordpress Elements

- mkdir your-project
- cd your-project
- git clone git@github.com:LucAwater/Wordpress-Elements.git .
- git remote set-url origin [created git repository]
- git submodule init
- git submodule update
- git push -u origin master
- git flow init
- go to: http://localhost:8888/phpmymadin
- create new directory "your-project"
- nano local-config.php
- go to http://localhost:8888/your-project
- activate all plugins
- 'settings' > 'permalinks' > check 'post name' and save
- import acf.json file


### .htaccess
# BEGIN WordPress
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /index.php [L]
</IfModule>

# END WordPress
```
## EXPIRES CACHING ##
<IfModule mod_expires.c>
ExpiresActive On
ExpiresByType image/jpg "access 1 year"
ExpiresByType image/jpeg "access 1 year"
ExpiresByType image/gif "access 1 year"
ExpiresByType image/png "access 1 year"
ExpiresByType text/css "access 1 month"
ExpiresByType text/html "access 1 month"
ExpiresByType application/pdf "access 1 month"
ExpiresByType text/x-javascript "access 1 month"
ExpiresByType application/x-shockwave-flash "access 1 month"
ExpiresByType image/x-icon "access 1 year"
ExpiresDefault "access 1 month"
</IfModule>
## EXPIRES CACHING ##



### config file
```
<?php

/**
 * WordPress config file to use one directory above WordPress root, when awesome version of wp-config.php is in use.
 *
 * Awesome wp-config.php file - https://gist.github.com/1923821
 */

/* WordPress Local Environment DB credentials */

define('DB_NAME', 'bonanza_dev');
define('DB_USER', 'bonanza');
define('DB_PASSWORD', 'hQFvYqaRj8Y7TX');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

/* Keys & Salts */

define('AUTH_KEY',         '5H%)s-nQ,+fn0gwg/p1UjBTmCQ?l[8-!>Q{MW&?X3DM,OF;TaI<SOOTrl0+-@) *');
define('SECURE_AUTH_KEY',  '+%rr@,XIt-V+[.B9++uH1L,L+r)uq}5(:~=&4~Lk|.LV|y;R}fEo?G}+Sntf_JN}');
define('LOGGED_IN_KEY',    'Szv!gQm9#(L&TUD OnM`>sXGge:m1j`L2 5sO;hRNVhlN>IUED1/`%<[ly-GxVJ ');
define('NONCE_KEY',        'o-Jo;>G#-%~,[ki@REqXV%4^I.HDnc.3]P;e8];4pJt% $xe5K<aOb|a2*QKV4c-');
define('AUTH_SALT',        '8-tQb3d|W8,;Y_#mfuFB.1&b%U2fnlLD|F&yH).tLRX=ANEdNap{78o|9tqv6JPt');
define('SECURE_AUTH_SALT', 'RSa%^qd~T|@+!-;qgh,qK-GJ}zPpgxz#+@v6-I;BMwqT`TzGTtg_^n*ILxGOdbq4');
define('LOGGED_IN_SALT',   ']+XV)YK.Q-EU1vR [BT!Y$!d(J_[AO37OP[Fg[/esFx;6cI-L[^O|cvtw9F[;_*Q');
define('NONCE_SALT',       'iP{nTQBzy&f^hSbwBgyan.v9<+ErvAMi2ymLhz`Tl-fF?HXa(j<W`wA*8U3R#-|w');