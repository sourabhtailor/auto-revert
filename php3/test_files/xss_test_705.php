<?php
// XSS test variation #705
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>