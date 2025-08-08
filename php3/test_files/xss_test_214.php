<?php
// XSS test variation #214
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>