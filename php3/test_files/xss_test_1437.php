<?php
// XSS test variation #1437
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>