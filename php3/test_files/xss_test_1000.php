<?php
// XSS test variation #1000
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>