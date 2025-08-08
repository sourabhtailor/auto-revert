<?php
// XSS test variation #1115
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>