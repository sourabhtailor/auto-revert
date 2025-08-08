<?php
// XSS test variation #1132
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>