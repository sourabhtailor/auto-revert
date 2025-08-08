<?php
// XSS test variation #1018
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>