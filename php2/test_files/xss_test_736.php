<?php
// XSS test variation #736
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>