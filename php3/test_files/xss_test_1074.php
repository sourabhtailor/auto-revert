<?php
// XSS test variation #1074
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>