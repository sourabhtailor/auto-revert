<?php
// XSS test variation #1270
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>