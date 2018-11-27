<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 17:20
 */

namespace theNameSpace;


class DisplayClassQuote
{
    public function displayClass ($class)
    {
        $result = '';
        foreach ($class as $student) {
            $result .= '<div><p>Name:' . $student->getName() . "AKA" . " " . $student->getNickName() . '</p> <p>Special Ability:' . $student->getSpecial()
                . '<p>' . '<p>Quotes:' . $student->getQuote() . '</p> <br> </div>';
        }
        return $result;
    }
}