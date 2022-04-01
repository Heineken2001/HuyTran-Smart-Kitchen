<?php
    class Database extends PDO{
        public function __construct($connect, $user, $pass) {
            parent::__construct($connect, $user, $pass);
        }

        public function select($tbl, $fetchStyle = PDO::FETCH_ASSOC) {
            $sql = "SELECT * FROM $tbl ORDER BY DevID DESC";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function insert($tbl, $data) {
            $keys = implode(",", array_keys($data));
            $values = ":".implode(", :", array_keys($data));
            $sql = "INSERT INTO $tbl($keys) VALUES($values)";
            // $sql = "INSERT INTO records($keys) VALUES($values)";
            $statement = $this->prepare($sql);

            foreach ($data as $key => $value) {
                $statement->bindValue(":$key",$value);
            }

            return $statement->execute();
        }

        public function getLightNow($fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM records WHERE DevID = 2 ORDER BY RecID DESC LIMIT 1";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

    }