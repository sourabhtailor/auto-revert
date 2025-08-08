<?php
// XSS test variation #182
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>