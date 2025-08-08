<?php
// XSS test variation #961
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>