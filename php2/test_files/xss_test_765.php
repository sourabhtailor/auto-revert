<?php
// XSS test variation #765
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>