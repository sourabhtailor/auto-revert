<?php
// Session + XSS test #15
session_start();
$msg = $_SESSION['msg'] = $_GET['msg'] ?? 'hello';
echo "Message: " . $msg;
?>