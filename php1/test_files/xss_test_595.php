<?php
// XSS test variation #595
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>