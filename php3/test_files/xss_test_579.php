<?php
// XSS test variation #579
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>