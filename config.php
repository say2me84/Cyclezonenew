<?php
    @session_start();
     //$link = @mysqli_connect("localhost","root","");
     @$conn = mysqli_connect("localhost","root","","cyclezonenew");
	 //$conn = @mysqli_select_db("cyclezonenew",$link);

	 if (mysqli_connect_errno())
  		{
		  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  		}

	//$conn = new PDO("mysql:host=localhost;dbname=cyclezonenew;", "root", "");
    @define("PreURL","http://localhost/cyclezonenew");
    date_default_timezone_set('Asia/Calcutta');    
?>