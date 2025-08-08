<?php
// XSS test variation #1026
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>