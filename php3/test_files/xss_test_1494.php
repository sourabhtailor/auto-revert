<?php
// XSS test variation #1494
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>