<?php
	if(!@mysql_connect("localhost","rabingai_user","programming123"))die("Database Error");
	if(!@mysql_select_db("rabingairecom_myweb"))die("Database Error");
?>