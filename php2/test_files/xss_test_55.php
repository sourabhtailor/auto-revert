<?php
// XSS test variation #55
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>