<?php
// XSS test variation #659
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>