<?php
// XSS test variation #1227
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>