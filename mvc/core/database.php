<?php
    class Database extends PDO{
        public function __construct($connect, $user, $pass) {
            parent::__construct($connect, $user, $pass);
        }

        public function select($tbl, $fetchStyle = PDO::FETCH_ASSOC) {
            $sql = "SELECT * FROM $tbl ";
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

        public function getBuzzerNow($fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM records WHERE DevID = 3 ORDER BY RecID DESC LIMIT 1";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function getHumidNow($fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM records WHERE DevID = 4 ORDER BY RecID DESC LIMIT 1";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function getHoomanNow($fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM records WHERE DevID = 6 ORDER BY RecID DESC LIMIT 1";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function getTempNow($fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM records WHERE DevID = 5 ORDER BY RecID DESC LIMIT 1";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function getGasNow($fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM records WHERE DevID = 7 ORDER BY RecID DESC LIMIT 1";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }

        public function update($user_table, $id, $gasbound) {
            $sql = "UPDATE $user_table SET GASBOUND = $gasbound WHERE ContID = $id";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }

        public function delete($user_table, $id) {
            $sql = "DELETE FROM $user_table WHERE ContID = $id";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }
    }