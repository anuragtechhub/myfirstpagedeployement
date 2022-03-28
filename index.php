<?php
   $host        = "host = ec2-54-173-77-184.compute-1.amazonaws.com";
   $port        = "port = 5432";
   $dbname      = "dbname = dffbnmpu6r7m60";
   $credentials = "user = ofvsjqpevinqbr password=0fe4c2921e2c6debb943c8544002d6c9473051ff78ff9b8229d86fa871c2c637";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
     $result = pg_query($conn, "CREATE TABLE saurabh");
     $result1 = pg_query($conn, "INSERT INTO saurabh("hi1", "hi2", "hi3")");
   }
?>
