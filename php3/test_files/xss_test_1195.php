<?php
// XSS test variation #1195
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>