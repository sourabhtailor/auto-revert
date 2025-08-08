<?php
// XSS test variation #1027
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>