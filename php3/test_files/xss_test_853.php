<?php
// XSS test variation #853
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>