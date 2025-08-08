<?php
// XSS test variation #520
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>