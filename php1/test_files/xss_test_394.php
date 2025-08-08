<?php
// XSS test variation #394
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>