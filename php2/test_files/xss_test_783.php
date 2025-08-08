<?php
// XSS test variation #783
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>