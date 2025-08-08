<?php
// XSS test variation #816
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>