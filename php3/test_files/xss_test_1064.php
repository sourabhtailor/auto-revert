<?php
// XSS test variation #1064
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>