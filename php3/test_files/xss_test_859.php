<?php
// XSS test variation #859
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>