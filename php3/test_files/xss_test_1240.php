<?php
// XSS test variation #1240
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>