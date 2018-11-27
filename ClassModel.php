<?php
/**
 * Created by PhpStorm.
 * User: academy
 * Date: 24/11/2018
 * Time: 13:28
 */

namespace theNameSpace;

class ClassModel
{
    protected $students = [];

    public function __construct(\PDO $db)
    {
        $query = $db->prepare("SELECT `name`,`nickName`,`specialAbility`,`quotes` FROM `quotes`;");
        $query->setFetchMode(\PDO::FETCH_CLASS, '\\theNameSpace\\StudentModel');
        $query->execute();
        $result = $query->fetchAll();

        return $this->students = $result;
    }

    public function getStudents()
    {
        return $this->students;
    }
}