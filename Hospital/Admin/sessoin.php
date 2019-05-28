

<?php
session_start();

if(@$_SESSION["name"] =="")
{
	die("You don't have permesion");
}
?>