<?php
// XSS test variation #47
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>