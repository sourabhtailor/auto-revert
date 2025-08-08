<?php
// XSS test variation #210
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>