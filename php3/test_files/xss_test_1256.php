<?php
// XSS test variation #1256
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>