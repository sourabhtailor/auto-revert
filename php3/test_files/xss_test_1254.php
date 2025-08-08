<?php
// XSS test variation #1254
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>