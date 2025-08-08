<?php
// XSS test variation #525
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>