<?php
// Eval injection test variation #904
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>