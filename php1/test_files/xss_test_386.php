<?php
// XSS test variation #386
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>