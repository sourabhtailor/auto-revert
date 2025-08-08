<?php
// XSS test variation #414
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>