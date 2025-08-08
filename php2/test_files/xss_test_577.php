<?php
// XSS test variation #577
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>