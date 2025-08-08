<?php
// Eval injection test variation #739
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>