<?php
// XSS test variation #304
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>