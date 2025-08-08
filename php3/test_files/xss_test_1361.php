<?php
// XSS test variation #1361
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>