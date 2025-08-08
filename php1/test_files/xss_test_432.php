<?php
// XSS test variation #432
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>