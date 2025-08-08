<?php
// XSS test variation #1350
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>