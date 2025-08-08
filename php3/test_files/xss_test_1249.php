<?php
// XSS test variation #1249
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>