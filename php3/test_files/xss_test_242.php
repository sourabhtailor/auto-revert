<?php
// XSS test variation #242
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>