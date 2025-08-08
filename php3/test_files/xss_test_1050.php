<?php
// XSS test variation #1050
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>