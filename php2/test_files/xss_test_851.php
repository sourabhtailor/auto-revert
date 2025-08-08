<?php
// XSS test variation #851
$input = $_GET['input'] ?? '';
echo "<div>User input: {$input}</div>";
?>