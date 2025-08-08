<?php
// XSS test variation #693
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>