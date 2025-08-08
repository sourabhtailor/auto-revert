<?php
// XSS test variation #377
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>