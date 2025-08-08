<?php
// Eval injection test variation #827
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>