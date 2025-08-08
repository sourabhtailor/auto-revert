<?php
// XSS test variation #521
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>