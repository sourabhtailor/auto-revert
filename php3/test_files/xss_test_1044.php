<?php
// XSS test variation #1044
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>