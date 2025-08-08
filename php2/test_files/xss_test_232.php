<?php
// XSS test variation #232
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>