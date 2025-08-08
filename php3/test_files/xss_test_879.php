<?php
// XSS test variation #879
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>