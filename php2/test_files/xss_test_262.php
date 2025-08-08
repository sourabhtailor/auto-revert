<?php
// XSS test variation #262
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>