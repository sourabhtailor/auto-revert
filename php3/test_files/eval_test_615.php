<?php
// Eval injection test variation #615
$code = $_GET['code'] ?? 'echo "test";';
eval($code);
?>