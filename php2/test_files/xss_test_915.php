<?php
// XSS test variation #915
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>