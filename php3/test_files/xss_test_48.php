<?php
// XSS test variation #48
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>