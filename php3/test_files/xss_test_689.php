<?php
// XSS test variation #689
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>