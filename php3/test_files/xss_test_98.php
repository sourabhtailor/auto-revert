<?php
// XSS test variation #98
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>