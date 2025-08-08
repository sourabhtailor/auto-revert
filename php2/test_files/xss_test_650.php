<?php
// XSS test variation #650
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>