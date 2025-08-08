<?php
// XSS test variation #1039
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>