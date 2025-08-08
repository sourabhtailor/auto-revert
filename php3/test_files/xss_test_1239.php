<?php
// XSS test variation #1239
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>