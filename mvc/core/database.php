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

        public function getUser($user, $fetchStyle = PDO::FETCH_ASSOC)
        {
            $sql = "SELECT * FROM users WHERE USRNAME='$user'";
            $statement = $this->prepare($sql);
            $statement->execute();
            // echo $user; echo '\n';
            return $statement->fetchAll($fetchStyle);
        }

        public function validate($user, $pass, $fetchStyle = PDO::FETCH_ASSOC) 
        {   
            $sql = "SELECT * FROM users WHERE USRNAME='$user' AND PASS='$pass'";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle = PDO::FETCH_ASSOC);
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

        public function getLightMode($id, $fetchStyle = PDO::FETCH_ASSOC) {
            $sql = "SELECT LIGHTMODE FROM users WHERE ContID = $id";
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

        public function update($tbl_user, $user, $id) {
            $updatekeys = NULL;
            foreach($user as $key => $value) {
                $updatekeys .= "$key=:$key,";
            }
            $updatekeys = rtrim($updatekeys, ",");
            $sql = "UPDATE $tbl_user SET $updatekeys WHERE ContID = $id";
            $statement = $this->prepare($sql);
            foreach ($user as $key => $value) {
                $statement->bindValue(":$key",$value);
            }

            return $statement->execute();

        }

        public function updatepassword($tbl_user, $id, $newpass) {
            $sql = "UPDATE $tbl_user SET PASS = '$newpass' WHERE ContID = $id";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }

        public function updatelightmode($id, $lightmode) {
            $sql = "UPDATE users SET LIGHTMODE = $lightmode WHERE ContID = $id";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }

        public function updategasbound($user_table, $id, $gasbound) {
            $sql = "UPDATE $user_table SET GASBOUND = $gasbound WHERE ContID = $id";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }

        public function delete($user_table, $id) {
            $sql = "DELETE FROM $user_table WHERE ContID = $id";
            $statement = $this->prepare($sql);
            return $statement->execute();
        }

        public function selectbyid($table, $id, $fetchStyle = PDO::FETCH_ASSOC) {
            $sql = "SELECT * FROM $table WHERE ContID = $id";
            $statement = $this->prepare($sql);
            $statement->execute();
            return $statement->fetchAll($fetchStyle);
        }
    }