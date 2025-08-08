<?php
// XSS test variation #1360
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>