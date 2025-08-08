<?php
// XSS test variation #541
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>