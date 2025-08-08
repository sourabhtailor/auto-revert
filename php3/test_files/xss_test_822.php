<?php
// XSS test variation #822
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>