<?php
// XSS test variation #335
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>