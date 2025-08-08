<?php
// XSS test variation #619
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>