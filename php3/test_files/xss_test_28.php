<?php
// XSS test variation #28
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>