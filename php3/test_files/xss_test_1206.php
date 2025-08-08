<?php
// XSS test variation #1206
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>