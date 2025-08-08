<?php
// XSS test variation #643
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>