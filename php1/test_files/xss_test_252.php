<?php
// XSS test variation #252
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>