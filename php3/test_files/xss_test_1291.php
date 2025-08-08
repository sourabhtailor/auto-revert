<?php
// XSS test variation #1291
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>