<?php
// XSS test variation #378
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>