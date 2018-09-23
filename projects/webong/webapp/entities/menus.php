<?php
    // menus
    class Menu {
        public $textMenu;
        public $urlMenu;
        public $statusMenu;

        public function __construct($text, $url, $status){
            $this->textMenu = $text;
            $this->urlMenu = $url;
            $this->statustMenu = $status;
        }        
    }

?>