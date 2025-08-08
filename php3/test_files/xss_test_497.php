<?php
// XSS test variation #497
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>