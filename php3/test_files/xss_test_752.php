<?php
// XSS test variation #752
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>