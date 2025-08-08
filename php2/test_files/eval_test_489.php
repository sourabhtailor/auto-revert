<?php
// Eval injection test variation #489
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>