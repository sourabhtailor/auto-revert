<?php
// XSS test variation #1124
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>