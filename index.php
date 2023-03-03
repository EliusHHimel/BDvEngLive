<?php
  // Define proxy server details
  $proxy_ip = '80.252.5.34';
  $proxy_port = 7001;

  // Define target website URL
  $target_url = 'http://bing.com';

  // Create a cURL handle
  $ch = curl_init();

  // Set cURL options
  curl_setopt($ch, CURLOPT_URL, $target_url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_PROXY, $proxy_ip);
  curl_setopt($ch, CURLOPT_PROXYPORT, $proxy_port);

  // Fetch the webpage content
  $page_content = curl_exec($ch);

  // Close the cURL handle
  curl_close($ch);

  // Display the webpage content inside the iframe
  echo '<iframe id="myiframe" srcdoc="'.htmlspecialchars($page_content).'" width="800" height="500"></iframe>';
?>
