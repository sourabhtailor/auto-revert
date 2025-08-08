<?php
// XSS test variation #1119
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>