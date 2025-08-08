<?php
// XSS test variation #1500
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>