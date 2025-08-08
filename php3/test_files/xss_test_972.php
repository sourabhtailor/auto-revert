<?php
// XSS test variation #972
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>