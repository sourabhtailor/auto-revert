<?php
// XSS test variation #722
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>