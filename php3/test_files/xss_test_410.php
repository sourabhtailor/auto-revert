<?php
// XSS test variation #410
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>