<?php
// XSS test variation #511
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>