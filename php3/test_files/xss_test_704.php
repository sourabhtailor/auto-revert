<?php
// XSS test variation #704
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>