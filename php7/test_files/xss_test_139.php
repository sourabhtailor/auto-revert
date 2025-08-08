<?php
// XSS test variation #139
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>