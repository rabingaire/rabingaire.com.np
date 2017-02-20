<?php
include('config/db.php');
$data = querydata();
function querydata() 
{
	$query = "SELECT * FROM `thumbup` WHERE `id` = '1'";
	if($query_run = mysql_query($query))
	{
		$value = mysql_fetch_array($query_run);
		return $value;	
	}
	else
	{
		echo mysql_error();	
	}	
}

function updatedata($num)
{
	$query = "UPDATE `thumbup` SET `thumbup`= '$num'";
	if($query_run = mysql_query($query))
	{
		$data = querydata();
		echo $data['thumbup'];	
	}
	else
	{
		echo mysql_error();	
	}	
}