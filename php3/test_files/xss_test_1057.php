<?php
// XSS test variation #1057
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>