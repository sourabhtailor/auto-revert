<?php
// XSS test variation #979
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>