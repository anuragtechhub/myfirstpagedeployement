<?php
   $host        = "host = 127.0.0.1";
   $port        = "port = 5432";
   $dbname      = "dbname = testdb";
   $credentials = "user = postgres password=pass123";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
     $result = pg_query($conn, "CREATE TABLE saurabh");
     $result1 = pg_query($conn, "INSERT INTO saurabh("hi1", "hi2", "hi3")");
   }
?>
