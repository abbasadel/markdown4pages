<?php

class Markdown_Core {

    public function parse($text) {
        if (!function_exists('Markdown')) {
            require Kohana::find_file('vendor', 'Markdown');
        }

        return Markdown($text);
    }

}