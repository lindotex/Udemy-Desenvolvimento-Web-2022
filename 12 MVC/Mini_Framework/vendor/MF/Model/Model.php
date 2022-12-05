<?php

namespace MF\Model;

abstract class Model {
    protected $db;

    public function __constructor(\PDO $db) {
        $this->db = $db;
    }
}
?>
