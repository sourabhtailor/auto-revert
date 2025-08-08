<?php
// XSS test variation #1122
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>