<?php
// XSS test variation #121
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>