<?php
// XSS test variation #1140
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>