<?php

	$state=$_GET['state'];
	$target=$_GET['target'];
	$page=$_GET['page'];
  include "db_connect.php";
 


  $page_list = array("tech","physical" ,"manage", "all", "weak"); //check if page is in page_list
  $state_list = array("yes","no");


    if (in_array($state, $state_list)&& in_array($page,$page_list)) {
    
    mysql_query("set session character_set_connection=utf8;");
    mysql_query("set session character_set_results=utf8;");
    mysql_query("set session character_set_client=utf8;");

    mysql_query("update list set treat='".$state."' where num=".$target) or die(mysql_error());

    echo("<script>location.href='./checkisms.php?page=".$page."';</script>");

	}
	else{
		echo ("<script>alert('Access error!!');</script>");
		echo ("<script>location.href='./index.php;</script>");
	}
?>