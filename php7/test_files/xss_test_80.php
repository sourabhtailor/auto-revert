<?php
// XSS test variation #80
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>