<?php
// XSS test variation #357
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>