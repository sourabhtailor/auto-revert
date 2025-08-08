<?php
// XSS test variation #1226
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>