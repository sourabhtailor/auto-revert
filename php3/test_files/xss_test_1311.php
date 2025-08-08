<?php
// XSS test variation #1311
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>