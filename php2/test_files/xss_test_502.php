<?php
// XSS test variation #502
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>