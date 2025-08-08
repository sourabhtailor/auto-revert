<?php
// XSS test variation #833
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>