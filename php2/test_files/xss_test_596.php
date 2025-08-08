<?php
// XSS test variation #596
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>