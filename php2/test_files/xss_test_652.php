<?php
// XSS test variation #652
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>