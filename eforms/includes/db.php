<?php

// Database Constant
const DBHOST = "127.0.0.1";

// local
// const DBUSER = "root";
// const DBPASSWORD = "";
// const DBNAME = "ithea";

// test
const DBUSER = "root";
const DBPASSWORD = "";
const DBNAME = "itheavic_newdb";

// live
// const DBUSER = "itheavic_newdb";
// const DBPASSWORD = "mXWR*m!aKw!A";
// const DBNAME = "itheavic_newdb";

class DB
{

    protected $dbh;

    public function __construct()
    {
        try {
            $this->dbh = new PDO("mysql:host=" . DBHOST . ";dbname=" . DBNAME, DBUSER, DBPASSWORD);
        } catch (PDOException $e) {
            throw new Exception("Could not connect to mysql database: " . $e->getMessage());
        }
    }

    public function getData($sql)
    {
        // Prepare the query:
        $query = $this->dbh->prepare($sql);
        // Execute the query:
        $query->execute();
        // Assign the data which you pulled from the database (in the preceding step) to a variable.
        $results = $query->fetchAll(PDO::FETCH_OBJ);
        return $results;
    }

    public function insertData($sql, $bind = [])
    {
        try {
            $statement = $this->dbh->prepare($sql);

            $statement->execute($bind);
            return true;
        } catch (PDOException $e) {
            throw new Exception("Some error occured while insert: " . $e->getMessage());
        }
    }

    public function updateData($sql, $bind = [])
    {
        try {

            $statement = $this->dbh->prepare($sql);

            foreach ($bind as $key => $val) {
                $param = is_numeric($key) ? $key + 1 : ':' . $key;
                $statement->bindValue($param, $val);
            }

            $statement->execute();

            return $statement->rowCount();

        } catch (\Throwable $e) {
            throw $e;
        }
    }
}

