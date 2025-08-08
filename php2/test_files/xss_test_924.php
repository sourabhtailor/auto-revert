<?php
// XSS test variation #924
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>