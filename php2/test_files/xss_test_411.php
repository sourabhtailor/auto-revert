<?php
// XSS test variation #411
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>