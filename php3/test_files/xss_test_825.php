<?php
// XSS test variation #825
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>