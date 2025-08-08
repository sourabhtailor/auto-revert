<?php
// XSS test variation #461
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>