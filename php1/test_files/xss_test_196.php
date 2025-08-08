<?php
// XSS test variation #196
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>