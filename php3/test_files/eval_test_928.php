<?php
// Eval injection test variation #928
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>