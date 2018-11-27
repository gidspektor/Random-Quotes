<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 13:56
 */

namespace theNameSpace;

class DisplayClassViewHelper
{
    public static function display($class, $name)
    {
        foreach ($class as $student) {
            if ($student->getName() === $name) {
                $oneQuote = explode('.',$student->getQuote());
                $one = array_rand($oneQuote);
                return $oneQuote[$one] . ", " . "AKA" . "  " . "the" . " " . $student->getNickName();
            }
        }
    }
}