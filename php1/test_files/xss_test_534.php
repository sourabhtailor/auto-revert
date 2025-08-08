<?php
// XSS test variation #534
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>