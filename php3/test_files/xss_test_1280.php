<?php
// XSS test variation #1280
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>