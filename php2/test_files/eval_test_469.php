<?php
// Eval injection test variation #469
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>