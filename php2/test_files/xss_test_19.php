<?php
// XSS test variation #19
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>