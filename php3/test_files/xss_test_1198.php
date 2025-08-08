<?php
// XSS test variation #1198
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>