<?php
// XSS test variation #721
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>