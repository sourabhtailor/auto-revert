<?php
// XSS test variation #819
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>