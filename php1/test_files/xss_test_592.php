<?php
// XSS test variation #592
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>