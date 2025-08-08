<?php
// XSS test variation #1211
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>