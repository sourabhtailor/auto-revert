<?php
// XSS test variation #726
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>