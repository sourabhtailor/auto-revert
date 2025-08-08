<?php
// XSS test variation #12
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>