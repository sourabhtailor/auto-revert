<?php
// XSS test variation #673
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>