<?php
// XSS test variation #1203
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>