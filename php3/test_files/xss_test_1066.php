<?php
// XSS test variation #1066
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>