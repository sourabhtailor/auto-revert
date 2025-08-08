<?php
// XSS test variation #469
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>