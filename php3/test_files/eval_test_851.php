<?php
// Eval injection test variation #851
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>