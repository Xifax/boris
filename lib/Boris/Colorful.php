<?php


/**
 * Console colors
 */
trait Colorful {

    private $foreground = "\033[%sm%s\033[0m";

    private $colors = [
        'green' => '0;32',
        'blue' => '0;34',
        'yellow' => '1;33',
        'purple' => '0;35',
        'white' => '1;37',
        'cyan' => '0;36',
        'red' => '0;31',
    ];

    /**
        * Colorizes strings for console output.
        *
        * [
        *  'string' => 'color'
        * ]
        */
    protected function colorize($strings) {
        $colorized = [];
        foreach($strings as $string => $color)
            $colorized[] = sprintf(
                $this->foreground,
                array_key_exists($color, $this->colors) ?
                    $this->colors[$color] : '0;',
                $string
            );
        return $colorized;
    }

}
