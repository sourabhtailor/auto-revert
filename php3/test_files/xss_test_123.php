<?php
// XSS test variation #123
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>