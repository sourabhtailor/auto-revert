<?php
// XSS test variation #513
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>