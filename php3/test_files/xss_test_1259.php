<?php
// XSS test variation #1259
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>