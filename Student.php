<?php

/*
    Student class
*/
class Student {
    /*
    * Constructor for the student class.
    */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /*
    * Adds an email to the Student object.
    * $which is the key in the associative array eg. workemail
    * $address is the email address eg. address@website.com
    */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /*
    * Inserts a grade to the Student object's grades.
    */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /*
    * Calculates the Student's average grade.
    */
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    }

    /*
    * Returns a string description of the Student object
    */
    function toString() {
        $result = $this->first_name .  ' ' . $this->surname;
        $result .= ' (' . $this->average() . ")\n";
        foreach ($this->emails as $which=>$what) {
            $result .= $which . ": $what\n";
        }
        $result .= "\n";
        return "<pre>$result</pre>";
    }
}

?>
