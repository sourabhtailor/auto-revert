<?php
// XSS test variation #285
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>