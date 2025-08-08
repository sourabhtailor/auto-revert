<?php
// XSS test variation #340
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>