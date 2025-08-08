<?php
// XSS test variation #797
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>