<?php
// XSS test variation #642
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>