<?php
// XSS test variation #810
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>