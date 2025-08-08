<?php
// XSS test variation #933
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>