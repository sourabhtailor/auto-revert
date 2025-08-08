<?php
// XSS test variation #633
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>