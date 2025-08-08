<?php
// XSS test variation #598
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>