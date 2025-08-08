<?php
// XSS test variation #504
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>