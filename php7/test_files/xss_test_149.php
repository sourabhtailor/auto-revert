<?php
// XSS test variation #149
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>