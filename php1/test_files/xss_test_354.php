<?php
// XSS test variation #354
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>