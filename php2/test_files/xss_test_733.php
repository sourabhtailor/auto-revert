<?php
// XSS test variation #733
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>