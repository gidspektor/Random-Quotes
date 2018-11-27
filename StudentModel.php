<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 13:22
 */

namespace theNameSpace;

class StudentModel
{
    protected $name;
    protected $nickName;
    protected $specialAbility;
    protected $quotes;

    public function getName()
    {
        return $this->name;
    }

    public function getNickName()
    {
        return $this->nickName;
    }

    public function getSpecial()
    {
        return $this->specialAbility;
    }

    public function getQuote()
    {
        return $this->quotes;
    }
}
