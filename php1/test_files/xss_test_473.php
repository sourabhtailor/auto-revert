<?php
// XSS test variation #473
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>