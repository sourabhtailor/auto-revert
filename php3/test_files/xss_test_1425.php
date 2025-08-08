<?php
// XSS test variation #1425
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>