<?php
session_start();
require_once "./mvc/Bridge.php";//Trỏ đến một tệp khác trong file
$myApp = new App();//Khi gọi đến App tự động function __construct() sẽ chạy
?>