<?php
// XSS test variation #1020
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>