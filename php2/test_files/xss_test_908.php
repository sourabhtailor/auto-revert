<?php
// XSS test variation #908
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>