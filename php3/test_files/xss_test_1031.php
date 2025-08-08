<?php
// XSS test variation #1031
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>