<?php
// XSS test variation #700
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>