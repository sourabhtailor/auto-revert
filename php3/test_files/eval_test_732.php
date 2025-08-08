<?php
// Eval injection test variation #732
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>