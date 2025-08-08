<?php
// XSS test variation #823
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>