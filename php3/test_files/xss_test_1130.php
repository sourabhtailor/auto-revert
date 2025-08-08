<?php
// XSS test variation #1130
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>