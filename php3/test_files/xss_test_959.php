<?php
// XSS test variation #959
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>