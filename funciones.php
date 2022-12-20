<?php
function escapar($html) {
  return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

function csrf() {

  session_start();

  if (empty($_SESSION['csrf'])) {
    if (function_exists('random_bytes')) {
      $_SESSION['csrf'] = bin2hex(random_bytes(32));
    } else {
      $_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
    }
  }
}