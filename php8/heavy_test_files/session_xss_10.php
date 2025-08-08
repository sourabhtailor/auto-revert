<?php
// Session + XSS test #10
session_start();
$msg = $_SESSION['msg'] = $_GET['msg'] ?? 'hello';
echo "Message: " . $msg;
?>