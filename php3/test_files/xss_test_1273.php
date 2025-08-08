<?php
// XSS test variation #1273
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>