<?php
// XSS test variation #266
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>