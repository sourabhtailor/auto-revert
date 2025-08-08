<?php
// XSS test variation #86
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>