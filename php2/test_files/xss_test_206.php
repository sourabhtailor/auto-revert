<?php
// XSS test variation #206
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>