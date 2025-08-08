<?php
// XSS test variation #323
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>