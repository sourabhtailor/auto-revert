<?php
// XSS test variation #1097
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>