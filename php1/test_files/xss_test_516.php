<?php
// XSS test variation #516
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>