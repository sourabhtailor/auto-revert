<?php
// XSS test variation #1159
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>