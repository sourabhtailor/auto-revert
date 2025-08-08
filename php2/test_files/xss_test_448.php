<?php
// XSS test variation #448
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>