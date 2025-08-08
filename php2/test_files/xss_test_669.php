<?php
// XSS test variation #669
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>