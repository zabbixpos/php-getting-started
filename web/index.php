<pre>
<?php
 $arq = rand();

 echo passthru("
  ssh-keygen -f /tmp/$arq -t rsa -N ''
  cat /tmp/$arq;
  cat /tmp/$arq.pub;
 ");
?>
</pre>
