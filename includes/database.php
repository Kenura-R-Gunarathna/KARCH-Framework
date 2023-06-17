<?php

namespace App;

use PDO;
use PDOException;
use App\DataHandling;
use App\ErrorHandling;

class DB
{
    protected string $db_connection = "mysql";
    protected string $servername = "localhost";
    protected int $port = 3306;
    protected string $username = "root";
    protected string $password = "";
    protected string $db_name = "";

    protected static string $table = "";
    protected string $table_id_name = "id";
    protected string $query = "";
    protected $table_fetch_mode = "";

    public function __construct()
    {
        $data = new DataHandling();

        $this->db_connection = $data->env->DB_CONNECTION;

        $this->servername = $data->env->DB_HOST;
        $this->port = $data->env->DB_PORT;

        $this->db_name = $data->env->DB_DATABASE;

        $this->username = $data->env->DB_USERNAME;
        $this->password = $data->env->DB_PASSWORD;

        $this->table_fetch_mode = PDO::FETCH_OBJ;
    }

    public static function table($table_name)
    {
        self::$table = $table_name;

        return new self;
    }

    public function query($query)
    {
        $this->query = $query;

        return $this;
    }

    public function setTableId($table_id_name)
    {
        $this->table_id_name = $table_id_name;

        return $this;
    }

    public function setFetchMode($table_fetch_mode)
    {
        $this->table_fetch_mode = $table_fetch_mode;

        return $this;
    }

    public function migrate($table_format)
    {
        try {
            $conn = new PDO($this->db_connection . ":host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Connected successfully!

            $stmt = $conn->prepare("SELECT * FROM " . self::$table . " $this->query;");

            $table_format_code = "";
            $counter = 1;

            foreach ($table_format as $table_format_col) {
                $table_format_code .= " " . $table_format_col;
                if (count($table_format) > $counter) {
                    $table_format_code .= ",";
                }
                $counter++;
            }

            // sql to create table
            $sql = "CREATE TABLE " . self::$table . " (
                        " . $table_format_code . ",
                        updated_at TIMESTAMP NOT NULL,
                        created_at TIMESTAMP NOT NULL
                    )";

            // use exec() because no results are returned
            $conn->exec($sql);

            return true;
        } catch (PDOException $e) {
            ErrorHandling::_500("Connection failed: " . $e->getMessage());
        }

        $conn = null;
    }

    public function get()
    {
        try {
            $conn = new PDO($this->db_connection . ":host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Connected successfully!

            $stmt = $conn->prepare("SELECT * FROM " . self::$table . " $this->query;");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode($this->table_fetch_mode);

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            ErrorHandling::_500("Connection failed: " . $e->getMessage());
        }

        $conn = null;
    }

    public function insert(array $values)
    {
        try {
            $conn = new PDO($this->db_connection . ":host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Connected successfully!

            // begin the transaction
            $conn->beginTransaction();

            // our SQL statements
            foreach ($values as $value) {

                $quey_column = "";
                $quey_value = "";
                $array_keys_count = 1;
                $array_values_count = 1;

                foreach (array_keys($value) as $col) {
                    $quey_column .= " " . $col;
                    if (count(array_keys($value)) > $array_keys_count) {
                        $quey_column .= ",";
                    }
                    $array_keys_count++;
                }

                foreach (array_values($value) as $col_value) {
                    $quey_value .= " '$col_value'";
                    if (count(array_values($value)) > $array_values_count) {
                        $quey_value .= ",";
                    }
                    $array_values_count++;
                }

                $conn->exec("INSERT INTO " . self::$table . " (" . $quey_column . ")  VALUES (" . $quey_value . ");");
            }

            // commit the transaction
            $conn->commit();

            return true;
        } catch (PDOException $e) {
            ErrorHandling::_500("Connection failed: " . $e->getMessage());
        }

        $conn = null;
    }

    public function create(array $values)
    {
        try {
            $conn = new PDO($this->db_connection . ":host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Connected successfully!

            // our SQL statements
            $quey_column = "";
            $quey_value = "";
            $array_keys_count = 1;
            $array_values_count = 1;

            foreach (array_keys($values) as $col) {
                $quey_column .= " " . $col;
                if (count(array_keys($values)) > $array_keys_count) {
                    $quey_column .= ",";
                }
                $array_keys_count++;
            }

            foreach (array_values($values) as $col_value) {
                $quey_value .= " '$col_value'";
                if (count(array_values($values)) > $array_values_count) {
                    $quey_value .= ",";
                }
                $array_values_count++;
            }

            $conn->exec("INSERT INTO " . self::$table . " (" . $quey_column . ", updated_at, created_at)  VALUES (" . $quey_value . ", '" . date('Y-m-d H:i:s') . "', '" . date('Y-m-d H:i:s') . "')");

            $last_id = $conn->lastInsertId();

            $stmt = $conn->prepare("SELECT * FROM " . self::$table . " WHERE $this->table_id_name=$last_id;");
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode($this->table_fetch_mode);

            return $stmt->fetchAll();
        } catch (PDOException $e) {
            ErrorHandling::_500("Connection failed: " . $e->getMessage());
        }

        $conn = null;
    }

    public function update(array $values)
    {
        try {
            $conn = new PDO($this->db_connection . ":host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Connected successfully!

            $update_values = "";
            $array_count = 1;

            foreach ($values as $key => $value) {

                $update_values .= " $key='$value'";
                if (count($values) > $array_count) {
                    $update_values .= ",";
                }
                $array_count++;
            }

            $stmt = $conn->prepare("UPDATE " . self::$table . " SET " . $update_values . ", updated_at='" . date('Y-m-d H:i:s') . "' " . $this->query . ";");

            // execute the query
            $stmt->execute();

            // set the resulting array to associative
            $result = $stmt->setFetchMode($this->table_fetch_mode);

            return $stmt->rowCount();
        } catch (PDOException $e) {
            ErrorHandling::_500("Connection failed: " . $e->getMessage());
        }

        $conn = null;
    }

    public function delete()
    {
        try {
            $conn = new PDO($this->db_connection . ":host=" . $this->servername . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //Connected successfully!

            $conn->exec("DELETE FROM " . self::$table . " $this->query;");

            return true;
        } catch (PDOException $e) {
            ErrorHandling::_500("Connection failed: " . $e->getMessage());
        }

        $conn = null;
    }
}
