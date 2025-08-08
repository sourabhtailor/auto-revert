<?php
// XSS test variation #1401
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>