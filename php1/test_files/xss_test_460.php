<?php
// XSS test variation #460
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>