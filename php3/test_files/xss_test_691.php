<?php
// XSS test variation #691
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>