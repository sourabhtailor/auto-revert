<?php
// XSS test variation #359
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>