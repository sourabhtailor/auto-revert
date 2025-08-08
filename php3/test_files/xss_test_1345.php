<?php
// XSS test variation #1345
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>