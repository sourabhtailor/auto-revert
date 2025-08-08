<?php
// XSS test variation #890
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>