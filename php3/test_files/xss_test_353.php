<?php
// XSS test variation #353
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>