<?php
// XSS test variation #1398
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>