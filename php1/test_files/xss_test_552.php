<?php
// XSS test variation #552
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>