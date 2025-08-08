<?php
// XSS test variation #578
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>