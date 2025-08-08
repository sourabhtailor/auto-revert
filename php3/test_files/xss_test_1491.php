<?php
// XSS test variation #1491
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>