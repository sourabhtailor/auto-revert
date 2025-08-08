<?php
// XSS test variation #1112
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>