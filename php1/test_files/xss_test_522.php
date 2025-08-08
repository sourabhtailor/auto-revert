<?php
// XSS test variation #522
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>