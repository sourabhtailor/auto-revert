<?php
// XSS test variation #992
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>