<?php
// XSS test variation #311
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>