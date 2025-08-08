<?php
// XSS test variation #991
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>