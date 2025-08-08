<?php
// XSS test variation #737
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>