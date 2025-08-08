<?php
// XSS test variation #220
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>