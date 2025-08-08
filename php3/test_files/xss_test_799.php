<?php
// XSS test variation #799
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>