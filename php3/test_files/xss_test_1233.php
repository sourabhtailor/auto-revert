<?php
// XSS test variation #1233
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>