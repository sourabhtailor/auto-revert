<?php
// XSS test variation #660
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>