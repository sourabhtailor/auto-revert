<?php
// Session + XSS test #3
session_start();
$msg = $_SESSION['msg'] = $_GET['msg'] ?? 'hello';
echo "Message: " . $msg;
?>