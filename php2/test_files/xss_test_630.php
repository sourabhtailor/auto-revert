<?php
// XSS test variation #630
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>