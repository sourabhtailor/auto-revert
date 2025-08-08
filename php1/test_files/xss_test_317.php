<?php
// XSS test variation #317
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>