<?php
// XSS test variation #1404
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>