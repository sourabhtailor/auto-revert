<?php
// XSS test variation #623
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>