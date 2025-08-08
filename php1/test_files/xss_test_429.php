<?php
// XSS test variation #429
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>