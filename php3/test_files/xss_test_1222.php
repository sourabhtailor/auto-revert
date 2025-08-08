<?php
// XSS test variation #1222
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>