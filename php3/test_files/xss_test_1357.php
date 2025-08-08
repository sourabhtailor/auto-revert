<?php
// XSS test variation #1357
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>