<?php
// XSS test variation #764
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>