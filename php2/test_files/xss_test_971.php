<?php
// XSS test variation #971
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>