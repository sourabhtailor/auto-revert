<?php
// XSS test variation #1075
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>