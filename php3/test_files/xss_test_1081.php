<?php
// XSS test variation #1081
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>