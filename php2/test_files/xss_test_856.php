<?php
// XSS test variation #856
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>