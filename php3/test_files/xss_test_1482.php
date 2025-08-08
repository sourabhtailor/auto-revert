<?php
// XSS test variation #1482
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>