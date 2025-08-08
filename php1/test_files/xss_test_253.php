<?php
// XSS test variation #253
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>