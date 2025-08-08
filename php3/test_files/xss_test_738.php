<?php
// XSS test variation #738
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>