<?php
// Eval injection test variation #628
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>