<?php
// XSS test variation #675
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>