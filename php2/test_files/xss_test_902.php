<?php
// XSS test variation #902
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>