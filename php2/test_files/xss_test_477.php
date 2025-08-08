<?php
// XSS test variation #477
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>