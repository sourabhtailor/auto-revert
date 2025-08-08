<?php
// XSS test variation #92
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>