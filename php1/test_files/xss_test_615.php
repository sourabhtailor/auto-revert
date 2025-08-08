<?php
// XSS test variation #615
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>