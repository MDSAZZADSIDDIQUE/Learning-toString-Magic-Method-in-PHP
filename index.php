<?php
class Student
{
    private $name;
    private $id;
    private $semester;

    function __construct($name, $id, $semester)
    {
        $this->name = $name;
        $this->id = $id;
        $this->semester = $semester;
    }

    function __set($prop, $value)
    {
        $this->$prop = $value;
    }

    function __get($prop)
    {
        return $this->prop;
    }
    function __toString()
    {
        return <<<EOD
        Name: {$this->name}
        ID: {$this->id}
        Semester: {$this->semester}
        EOD;
    }
}

$sazzad = new Student("Sazzad", "20-43747-2", "Spring");
echo $sazzad;
