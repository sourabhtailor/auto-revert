<?php
// XSS test variation #188
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>