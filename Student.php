<?php

/*
    Student
*/
class Student {
    function __construct() {
        $this->surname = '';
        $this->firstname = '';
        $this->emails = array();
        $this->grades = array();
    }
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
}

?>
