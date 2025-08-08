<?php
// XSS test variation #1443
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>