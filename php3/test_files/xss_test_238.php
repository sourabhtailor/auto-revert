<?php
// XSS test variation #238
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>