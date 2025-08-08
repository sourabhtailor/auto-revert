<?php
// XSS test variation #476
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>