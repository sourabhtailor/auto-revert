<?php
// XSS test variation #785
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>