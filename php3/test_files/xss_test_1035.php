<?php
// XSS test variation #1035
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>