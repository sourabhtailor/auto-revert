<?php
// XSS test variation #166
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>