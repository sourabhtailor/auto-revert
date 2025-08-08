<?php
// XSS test variation #980
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>