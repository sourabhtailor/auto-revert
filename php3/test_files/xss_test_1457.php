<?php
// XSS test variation #1457
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>