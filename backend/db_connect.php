<?php

/**
 * Class dbConnectionController.
 * Made connection to the database MySQLi Object-oriented
 */
class dbConnectionController {
    public $is_connected = false;
    public $conn;

    /**
     * dbConnectionController constructor.
     */
    public function __construct() {
        // connect to db
        $this->connect();
    }

    /**
     * destructor
     */
    public function __destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    public function connect() {
        // import database connection variables
        require_once __DIR__ . '/config/config.php';
        $this->is_connected = true;
        // Connecting to mysql database
        $this->conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if (!$this->conn) {
            $this->is_connected = false;
        }
    }

    /**
     * Returns connection
     * @return mixed
     */
    public function getConn() {
        return $this->conn;
    }

    /**
     * Function to close db connection
     */
    public function close() {
        if ($this->is_connected === true) {
            // closing db connection
            $this->conn->close();
        }
    }
}