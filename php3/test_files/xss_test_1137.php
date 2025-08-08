<?php
// XSS test variation #1137
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>