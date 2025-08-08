<?php
// XSS test variation #433
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>