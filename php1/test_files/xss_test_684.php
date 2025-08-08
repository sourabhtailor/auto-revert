<?php
// XSS test variation #684
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>