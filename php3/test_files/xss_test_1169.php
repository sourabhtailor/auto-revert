<?php
// XSS test variation #1169
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>