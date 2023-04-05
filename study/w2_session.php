<?php
session_start();
if(isset($_SESSION['login'])){
echo "welcome ". $_SESSION['login'];
} else {
echo "Please Login!";
}
unset($_SESSION['login']);
session_destroy();
?>