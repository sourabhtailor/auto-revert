<?php
// XSS test variation #1100
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>