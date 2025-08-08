<?php
// XSS test variation #127
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>