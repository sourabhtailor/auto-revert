<?php
// XSS test variation #128
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>