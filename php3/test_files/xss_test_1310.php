<?php
// XSS test variation #1310
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>