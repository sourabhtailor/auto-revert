<?php
// XSS test variation #336
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>