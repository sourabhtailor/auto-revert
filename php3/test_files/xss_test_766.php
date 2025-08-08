<?php
// XSS test variation #766
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>