<?php
// XSS test variation #1264
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>