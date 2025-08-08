<?php
// XSS test variation #203
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>