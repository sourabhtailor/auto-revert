<?php
// XSS test variation #564
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>