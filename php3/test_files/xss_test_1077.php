<?php
// XSS test variation #1077
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>