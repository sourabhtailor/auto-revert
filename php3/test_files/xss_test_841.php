<?php
// XSS test variation #841
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>