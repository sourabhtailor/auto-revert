<?php
// XSS test variation #1289
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>