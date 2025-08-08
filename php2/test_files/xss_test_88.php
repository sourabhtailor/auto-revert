<?php
// XSS test variation #88
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>