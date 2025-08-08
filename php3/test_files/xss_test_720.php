<?php
// XSS test variation #720
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>