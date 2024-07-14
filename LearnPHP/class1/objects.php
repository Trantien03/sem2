<?php

class Student {
    public $first_name;
    public $last_name;

    // Methods
    function set_Fname($name) {
        $this->first_name = $name;
    }
    function get_Fname() {
        return $this->first_name;
    }

    function set_Lname($name) {
        $this->last_name = $name;
    }
    function get_Lname() {
        return $this->last_name;
    }

    public function __construct($fname, $lname) {
        $this->first_name = $fname;
        $this->last_name = $lname;
    }

    public function display() {
        echo "My name is " . $this->first_name . " " . $this->last_name;
    }
}

class FPTStudent extends Student {
    public $rollnumber;

    public function __construct($fname, $lname, $rollnumber)
    {
        parent::__construct($fname, $lname);
        $this->rollnumber = $rollnumber;
    }

    function set_rollnumber($rn) {
        $this->rollnumber = $rn;
    }
    function get_rollnumber() {
        return $this->rollnumber;
    }

    public function hello() {
        echo "My name is " . $this->first_name . " " . $this->last_name;
        echo "FPT rollnumber " . $this->rollnumber;
    }

}

echo "<br>";

$new_student = new Student("Peter", "Smith");
$new_student->display();

echo "<br>";
$fpt_student
    = new FPTStudent("Peter", "Smith", "FPT001");
$fpt_student->hello();

?>