<?php
// XSS test variation #151
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>