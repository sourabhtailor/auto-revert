<?php
// XSS test variation #383
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>