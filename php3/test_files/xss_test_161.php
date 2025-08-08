<?php
// XSS test variation #161
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>