<?php
// XSS test variation #750
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>