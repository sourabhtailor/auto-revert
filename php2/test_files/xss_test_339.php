<?php
// XSS test variation #339
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>