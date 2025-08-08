<?php
// XSS test variation #517
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>