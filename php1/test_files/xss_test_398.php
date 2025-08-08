<?php
// XSS test variation #398
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>