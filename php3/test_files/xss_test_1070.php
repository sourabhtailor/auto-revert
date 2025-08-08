<?php
// XSS test variation #1070
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>