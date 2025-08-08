<?php
// XSS test variation #276
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>