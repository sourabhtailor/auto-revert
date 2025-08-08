<?php
// XSS test variation #506
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>