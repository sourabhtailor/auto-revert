<?php
// XSS test variation #662
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>