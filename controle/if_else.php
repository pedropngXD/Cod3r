<div class="titulo">If / Else</div>

<?php
{
    echo "Linha 1";
    echo '<br>';
    echo "Linha 2";
}
if(true)
   echo '<br>', "Serei impresso?";

//if(false)
//   echo "Serei impresso?";
//   echo "Serei impresso? novamente?";

echo "<br>";

if(true) {
    echo "Serei impresso novamente?";
    echo '<br>';
    echo "Serei impresso mais uma vez?";
}

echo "<br>";

//------------------------------//------------------------------//

//cuidado com ponto e virgula ( ;)
if(false); {
    echo "Serei impresso novamente?";
    echo '<br>';
    echo "Serei impresso mais uma vez?";
}