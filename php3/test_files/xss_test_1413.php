<?php
// XSS test variation #1413
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>