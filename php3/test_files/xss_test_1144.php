<?php
// XSS test variation #1144
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>