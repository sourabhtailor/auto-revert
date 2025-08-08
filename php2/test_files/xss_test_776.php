<?php
// XSS test variation #776
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>