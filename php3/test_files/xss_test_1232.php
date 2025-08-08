<?php
// XSS test variation #1232
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>