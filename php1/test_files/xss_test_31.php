<?php
// XSS test variation #31
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>