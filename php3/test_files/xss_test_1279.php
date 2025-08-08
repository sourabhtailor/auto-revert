<?php
// XSS test variation #1279
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>