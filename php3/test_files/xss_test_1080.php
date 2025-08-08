<?php
// XSS test variation #1080
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>