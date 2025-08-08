<?php
// XSS test variation #710
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>