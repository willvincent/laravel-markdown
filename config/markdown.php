<?php

return [

    /*
     |--------------------------------------------------------------------------
     | Typography Prettification Enabled
     |--------------------------------------------------------------------------
     |
     | When set to true, this will run text being parsed through the SmartyPants
     | typographic prettifier after markdown has been parsed. The end result
     | is that single and double quotes get replaced with their more appealing
     | 'curly' utf-8 versions.
     |
     | Note: text inside pre, code, kdb, and script tags will NOT be affected.
     |
     */
     'pretty' => true,

     /*
     |--------------------------------------------------------------------------
     | Configure Typography Prettification
     |--------------------------------------------------------------------------
     |
     | Configures the prettification rules to apply to text being parsed.
     | This setting has no affect if typography prettification is disabled.
     |
     | Refer to 'Options and Configuration' for SmartyPants to see a list of
     | available configuration options:
     | https://github.com/michelf/php-smartypants
     |
     */
     'pretty_options' => 'qDe',

     /*
     |--------------------------------------------------------------------------
     | Automatic Line Breaks Enabled
     |--------------------------------------------------------------------------
     |
     | Controls whether to replace instances of a single newline with a break
     | tag.
     |
     */
     'breaks' => true,

     /*
     |--------------------------------------------------------------------------
     | Escape Markup
     |--------------------------------------------------------------------------
     |
     | Controls whether to escape parsed markup. 
     |
     | Given this input string:
     |   <div><strong>Hello _World_</strong></div>
     |
     | Escaped markup would look like this:
     |   <p>&lt;div&gt;&lt;strong&gt;Hello <em>World</em>&lt;/strong&gt;&lt;/div&gt;
     |
     | Unescaped markup would look like this: (default)
     |   <p><div><strong>Hello <em>World</em></strong></div></p> 
     */
     'escape' => false,

     /*
     |--------------------------------------------------------------------------
     | Automatic Url Linking
     |--------------------------------------------------------------------------
     |
     | Controls whether to replace automatically link urls.
     |
     */
     'urls_linked' => true,

];
