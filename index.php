<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  // we will fill this out next
  return "dbname=ddqshbbp5hf289 host=ec2-54-197-246-197.compute-1.amazonaws.com port=5432 user=aukxnojvkjwmqm password=ytJA96yoCwF38KHi9W0fcC1NVU sslmode=require"

}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
echo "HI DB BABY";
echo $result;
?>