<?php
// XSS test variation #1230
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>