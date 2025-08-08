<?php
// XSS test variation #303
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>