<?php
// XSS test variation #70
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>