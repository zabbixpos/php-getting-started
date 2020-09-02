<pre>
<?php
 $arq = rand();

 passthru("
  ssh-keygen -f /tmp/$arq -t rsa -N '' >> /dev/null;
  echo '<h2>SSH-KEYGEN</h2>'
  echo '<table>'
  echo '<tr><td>Cliente(id_rsa)</td><td>Server(id_rsa.pub)</td></tr>'
  echo '<tr>'
  echo '<td valign='top'>'
  echo '<textarea rows='30' cols='69'>';
    cat /tmp/$arq;
  echo '</textarea>';
  echo '</td>'
  echo '<td valign='top'>'
  echo '<textarea rows='30' cols='69'>';
    cat /tmp/$arq.pub;
  echo '</textarea>';
  echo '</td></tr></table>';
     rm -rf /tmp/$arq /tmp/$arq.pub
 ");
?>
</pre>
