<?php
// Eval injection test variation #889
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>