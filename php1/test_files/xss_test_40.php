<?php
// XSS test variation #40
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>