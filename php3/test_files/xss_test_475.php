<?php
// XSS test variation #475
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>