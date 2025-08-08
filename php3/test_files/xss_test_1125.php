<?php
// XSS test variation #1125
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>