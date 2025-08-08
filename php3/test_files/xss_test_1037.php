<?php
// XSS test variation #1037
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>