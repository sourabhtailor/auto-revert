<?php
// XSS test variation #245
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>