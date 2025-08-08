<?php
// XSS test variation #455
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>