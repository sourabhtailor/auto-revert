<?php
// XSS test variation #767
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>