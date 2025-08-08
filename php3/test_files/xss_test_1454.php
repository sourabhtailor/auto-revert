<?php
// XSS test variation #1454
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>