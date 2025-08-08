<?php
// XSS test variation #755
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>