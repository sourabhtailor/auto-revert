<?php
// XSS test variation #983
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>