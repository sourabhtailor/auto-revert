<?php
// XSS test variation #69
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>