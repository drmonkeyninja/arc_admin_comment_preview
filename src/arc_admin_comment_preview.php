<?php
$plugin['name'] = 'arc_admin_comment_preview';
$plugin['version'] = '0.1.2';
$plugin['author'] = 'Andy Carter';
$plugin['author_uri'] = 'http://andy-carter.com/';
$plugin['description'] = 'Adds a comment preview in the admin comments edit screen';
$plugin['type'] = 1;

@include_once('zem_tpl.php');

if (0) {
	?>
# --- BEGIN PLUGIN HELP ---

h1. arc_admin_comment_preview

A simple little plugin that uses jQuery to add a preview of the comment being viewed in the comment edit screen on the admin side of Textpattern.

Requirements:-

* Textpattern 4.0.8+

h2. Installation

To install go to 'Plugins' under 'Admin' and paste the plugin code into the 'Install plugin' box, 'upload' and then 'install'. You will then need to activate the plugin.

h2. Uninstall

To uninstall arc_admin_comment_preview simply delete the plugin from the 'Plugins' tab.

h2. License

The MIT License (MIT)

Copyright (c) 2016 Andy Carter

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

# --- END PLUGIN HELP ---
<?php
}

# --- BEGIN PLUGIN CODE ---

if (@txpinterface == 'admin') {
    register_callback('arc_admin_comment_preview', 'discuss', 'discuss_edit');
}

/**
 * Add a comment preview to the discuss_edit step using JavaScript.
 *
 * @return void
 */
function arc_admin_comment_preview()
{
    $js = '<script language="javascript" type="text/javascript">';
    $js .= '$(document).ready(function(){
        $("textarea").after("<div style=\"width:100%;clear:both;\">"+$("textarea").val()+"</div>")});';
    $js .= '</script>';

    echo $js;

    return;
}

# --- END PLUGIN CODE ---

?>
