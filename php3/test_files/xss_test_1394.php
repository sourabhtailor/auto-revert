<?php
// XSS test variation #1394
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>