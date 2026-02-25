<?php
// Example extension, https://github.com/annaesvenson/yellow-example

class YellowExample {
    const VERSION = "0.9.2";
    public $yellow;         // access to API
    
    // Handle initialisation
    public function onLoad($yellow) {
        $this->yellow = $yellow;
    }
    
    // Handle page content element
    public function onParseContentElement($page, $name, $text, $attributes, $type) {
        $output = null;
        if ($name=="example" && $type=="inline") {
            if (is_string_empty($text)) $text = "Hello World";
            $output = "<span class=\"example\">".htmlspecialchars($text)."</span>";
        }
        return $output;
    }
}
