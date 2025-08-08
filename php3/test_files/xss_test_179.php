<?php
// XSS test variation #179
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>