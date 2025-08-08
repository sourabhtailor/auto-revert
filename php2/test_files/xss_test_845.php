<?php
// XSS test variation #845
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>