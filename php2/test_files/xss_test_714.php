<?php
// XSS test variation #714
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>