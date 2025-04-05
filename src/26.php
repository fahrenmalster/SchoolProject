<?php
class SchoolProject {
    private $database;

    public function __construct() {
        $this->database = new Database();
    }

    public function getCourseList($limit = 10) {
        $result = $this->database->query("SELECT * FROM courses LIMIT $limit");
        return $result;
    }
}
