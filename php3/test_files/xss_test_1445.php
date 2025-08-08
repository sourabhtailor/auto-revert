<?php
// XSS test variation #1445
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>