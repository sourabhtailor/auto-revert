<?php
// XSS test variation #732
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>