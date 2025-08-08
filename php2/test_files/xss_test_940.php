<?php
// XSS test variation #940
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>