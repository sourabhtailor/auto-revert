<?php
// XSS test variation #1055
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>