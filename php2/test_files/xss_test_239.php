<?php
// XSS test variation #239
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>