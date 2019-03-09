<?php
	error_reporting(E_ALL ^ (E_DEPRECATED|E_NOTICE|E_WARNING));
	mysql_connect('localhost','root','');
	mysql_select_db('sensus_penduduk');
?>