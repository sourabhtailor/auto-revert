<?php
// XSS test variation #855
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>