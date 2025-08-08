<?php
// XSS test variation #995
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>