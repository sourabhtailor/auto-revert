<?php
// XSS test variation #443
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>