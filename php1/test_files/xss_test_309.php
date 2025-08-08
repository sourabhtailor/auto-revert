<?php
// XSS test variation #309
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>