<?php
// XSS test variation #809
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>