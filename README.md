# phpBasicCMS

Simple and basic php script system to use basic php cms.
It already includes bootstrape (with jquery an Propper.js

## Installation
Just download or clone repository to your webspace and add content.

## Usage
The system mainly uses a main file 'index.php' to show content. The content is stored as php files in directory content. JS and CSS, as well as PHP function files are stored in subdirectories inside 'includes'. Media content is stored in 'assets'.
The content pages will be called from 'content' directory using following url syntax:

    <URL>?page=<PAGE>
    <URL>?p=<PAGE>
    <URL>?<PAGE>
    
Where <URL> is the site url and <PAGE> is the file name to show inside 'content' directory. If no content page is set, the index.php will try to show 'home' content page.

### Footer, Header and Navigation
Sites footer, HTML-Header and sites navigation are automatically included from content file called, footer.php, header.php and nav.php.

### PHP Functions
All needed php functions are included in file base.php:

    # Shows an error
    # $err:        Error text to show
    # $data:    Optional string data to show
    function err($err, $data="")
    
    # ---- String Functions ----
    
    # Checks if string starts with substring
    # $str:        String to check
    # $sub:        Substring to check for
    # return:    true if $sub is at beginning of $str, false otherwise
    function startsWith( $str, $sub )
    
    # Checks if string ends with substring
    # $str:        String to check
    # $sub:        Substring to check for
    # return:    true if $sub is at ends of $str, false otherwise
    function endsWith( $str, $sub )
    
    # Adds extension to url, if not already there
    # $url:        URL to check and add extension
    # $ext:        Extension to add [default: ".php"]
    # return:    $url with extension $ext
    function addExtension($url, $ext=".php")
    
    
    # ---- Content Include Functions ----
    
    # Includes and shows a content site from global $content path
    # Function automaticcally add .php extension
    # $site:    Site name or file to include
    function get($site)
    
    # Includes and shows a js file from global $js path
    # Function automaticcally add .js extension
    # $site:    Js name or file to include
    function getJs($site)
    
    # Includes and shows a css site from global $css path
    # Function automaticcally add .css extension
    # $site:    Css name or file to include
    function getCss($site)
    
    # Shows the link to an assets content from global $assets path
    # $data:        Data file to print link
    function src($data)
    
    # Prints url to a content page from global $content path
    # Function automaticcally add .php extension
    # $site:        Content page link to show
    function url($site)
