<?php
// XSS test variation #784
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>