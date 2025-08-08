<?php
// XSS test variation #701
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>