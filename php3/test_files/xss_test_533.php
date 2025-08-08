<?php
// XSS test variation #533
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>