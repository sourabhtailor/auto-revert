<?php
// XSS test variation #861
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>