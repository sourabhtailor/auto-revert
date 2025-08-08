<?php
// XSS test variation #1370
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>