<?php
// XSS test variation #120
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>