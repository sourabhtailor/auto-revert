<?php
// XSS test variation #751
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>