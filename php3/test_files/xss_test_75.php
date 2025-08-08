<?php
// XSS test variation #75
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>