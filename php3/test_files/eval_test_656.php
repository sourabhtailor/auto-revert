<?php
// Eval injection test variation #656
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>