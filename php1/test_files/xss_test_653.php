<?php
// XSS test variation #653
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>