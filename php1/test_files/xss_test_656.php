<?php
// XSS test variation #656
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>