<?php
// XSS test variation #950
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>