<?php
// XSS test variation #544
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>