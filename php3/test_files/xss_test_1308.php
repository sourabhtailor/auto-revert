<?php
// XSS test variation #1308
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>