<?php
// XSS test variation #1068
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>