<?php
// XSS test variation #440
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>