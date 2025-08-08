<?php
// XSS test variation #773
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>