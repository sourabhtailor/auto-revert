<?php
// XSS test variation #1250
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>