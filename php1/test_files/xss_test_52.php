<?php
// XSS test variation #52
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>