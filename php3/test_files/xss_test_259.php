<?php
// XSS test variation #259
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>