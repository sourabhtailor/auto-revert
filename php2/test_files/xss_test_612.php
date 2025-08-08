<?php
// XSS test variation #612
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>