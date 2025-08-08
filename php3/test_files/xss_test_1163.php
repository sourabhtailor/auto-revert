<?php
// XSS test variation #1163
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>