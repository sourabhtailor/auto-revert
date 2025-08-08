<?php
// XSS test variation #745
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>