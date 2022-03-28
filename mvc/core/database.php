<?php
    class Database extends PDO{
        public function __construct($connect, $user, $pass) {
            parent::__construct($connect, $user, $pass);
        }

        public function select($table, $fetchStyle = PDO::FETCH_ASSOC) {
            $sql = "SELECT * FROM $table ORDER BY ID DESC";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function insert($table, $data) {
            $keys = implode(",", array_keys($data));
            $values = ":".implode(", :", array_keys($data));
            $sql = "INSERT INTO $table($keys) VALUES($values)";
            $statement = $this->prepare($sql);

            foreach ($data as $key => $value) {
                $statement->bindParam(":$keys",$value);
            }

            return $statement->execute();
        }
    }