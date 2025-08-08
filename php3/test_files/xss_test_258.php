<?php
// XSS test variation #258
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>