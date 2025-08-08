<?php
// XSS test variation #910
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>