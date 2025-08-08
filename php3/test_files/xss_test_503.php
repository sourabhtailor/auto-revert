<?php
// XSS test variation #503
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>