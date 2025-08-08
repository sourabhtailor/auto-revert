<?php
// XSS test variation #680
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>