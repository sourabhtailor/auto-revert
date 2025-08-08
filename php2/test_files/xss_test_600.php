<?php
// XSS test variation #600
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>