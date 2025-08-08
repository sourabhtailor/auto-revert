<?php
// XSS test variation #545
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>