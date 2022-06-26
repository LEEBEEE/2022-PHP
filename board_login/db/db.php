<?php
    define("URL", "localhost");
    define("USERNAME", "root");
    define("PASSWORD", "11568311");
    define("DB_NAME", "board_login");
    define("PORT", "3377");

    function get_conn()
    {
        return mysqli_connect(URL, USERNAME, PASSWORD, DB_NAME, PORT);
    }