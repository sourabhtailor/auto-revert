<?php
// Eval injection test variation #841
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>