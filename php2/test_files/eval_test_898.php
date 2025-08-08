<?php
// Eval injection test variation #898
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>