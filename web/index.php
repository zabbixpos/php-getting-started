<pre>
<?php
 $arq = rand();

 passthru("
  ssh-keygen -f /tmp/$arq -t rsa -N '' >> /dev/null;
  echo '<table><tr>'
  echo '<td>'
  echo '<textarea rows='30' cols='69'>';
    cat /tmp/$arq;
  echo '</textarea>';
  echo '</td>'
  echo '<td>'
  echo '<textarea rows='15' cols='69'>';
    cat /tmp/$arq.pub;
  echo '</textarea>';
  echo '</td></tr></table>';
     rm -rf /tmp/$arq /tmp/$arq.pub
 ");
?>
</pre>
