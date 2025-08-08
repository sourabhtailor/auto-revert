<?php
// XSS test variation #1103
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>