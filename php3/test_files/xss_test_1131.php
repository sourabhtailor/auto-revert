<?php
// XSS test variation #1131
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>