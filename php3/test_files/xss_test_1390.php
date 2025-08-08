<?php
// XSS test variation #1390
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>