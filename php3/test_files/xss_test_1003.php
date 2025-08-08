<?php
// XSS test variation #1003
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>