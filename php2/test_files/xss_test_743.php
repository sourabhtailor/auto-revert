<?php
// XSS test variation #743
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>