<?php
// XSS test variation #1098
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>