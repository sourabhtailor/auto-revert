<?php
// XSS test variation #1065
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>