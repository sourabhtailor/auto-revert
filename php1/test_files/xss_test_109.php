<?php
// XSS test variation #109
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>