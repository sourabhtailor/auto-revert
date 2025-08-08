<?php
// XSS test variation #1402
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>