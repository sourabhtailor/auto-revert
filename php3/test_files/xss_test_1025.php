<?php
// XSS test variation #1025
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>