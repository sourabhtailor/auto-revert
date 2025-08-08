<?php
// XSS test variation #66
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>