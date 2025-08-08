<?php
// XSS test variation #41
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>