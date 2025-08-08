<?php
// XSS test variation #986
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>