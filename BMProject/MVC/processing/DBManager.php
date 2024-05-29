<?php

class dbProduct {
    public $con;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "bmdb";

    function __construct() {
        // Kết nối đến MySQL
        $this->con = mysqli_connect($this->servername, $this->username, $this->password);

        // Kiểm tra kết nối
        if (mysqli_connect_errno()) {
            die("Failed to connect to MySQL: " . mysqli_connect_error());
        }

        // Chọn cơ sở dữ liệu
        if (!mysqli_select_db($this->con, $this->dbname)) {
            die("Failed to select database: " . mysqli_error($this->con));
        }

        // Thiết lập bộ ký tự
        if (!mysqli_set_charset($this->con, "utf8")) {
            die("Failed to set character set: " . mysqli_error($this->con));
        }
    }
}
?>

