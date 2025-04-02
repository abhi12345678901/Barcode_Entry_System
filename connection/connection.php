<?php

 // this will avoid mysql_connect() deprecation error, 
 //error_reporting( ~E_ALL & ~E_DEPRECATED &  ~E_NOTICE );
 // I strongly suggest you to use PDO or MySQLi.
 
 
 //define('DBHOST', 'localhost');
 //define('DBUSER', 'rgpvalumni');
 //define('DBPASS', 'RGPV@2016');
 //define('DBNAME', 'techno_rgpvalumni');
 
   /*define('DBHOST', 'locslhost:3306');
  define('DBUSER', 'root');
  define('DBPASS', '');
  //define('DBNAME', 'alumni');
 define('DBNAME', 'project');*/
 
 
 
 //$conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 //$dbcon = mysql_select_db(DBNAME,$conn);
 
 /*if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }
 
 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
 }*/
?>