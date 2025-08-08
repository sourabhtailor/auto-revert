<?php
// XSS test variation #177
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>