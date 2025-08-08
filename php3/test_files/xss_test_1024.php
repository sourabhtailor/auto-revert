<?php
// XSS test variation #1024
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>