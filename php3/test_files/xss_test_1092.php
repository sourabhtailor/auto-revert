<?php
// XSS test variation #1092
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>