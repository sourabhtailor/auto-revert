<?php
// XSS test variation #706
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>