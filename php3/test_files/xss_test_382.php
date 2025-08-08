<?php
// XSS test variation #382
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>