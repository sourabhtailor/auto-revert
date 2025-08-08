<?php
// Eval injection test variation #278
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>