<?php
// XSS test variation #366
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>