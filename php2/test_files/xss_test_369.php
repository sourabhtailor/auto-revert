<?php
// XSS test variation #369
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>