<?php
// XSS test variation #1145
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>