<?php 
session_start();
echo '<pre>';
print_r($_SERVER['HTTP_REFERER']);
echo '</pre>';