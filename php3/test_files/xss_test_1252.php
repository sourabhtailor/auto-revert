<?php
// XSS test variation #1252
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>