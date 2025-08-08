<?php
// XSS test variation #1421
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>