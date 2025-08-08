<?php
// XSS test variation #453
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>