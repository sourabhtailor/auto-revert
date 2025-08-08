<?php
// XSS test variation #769
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>