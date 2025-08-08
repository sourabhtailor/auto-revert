<?php
// XSS test variation #553
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>