<?php

$age=14;

if($age<15):
echo "Çocuk";

elseif($age>=15 && $age<25):
echo "Genç";

elseif($age>=25 && $age<65):
echo "Yetişkin";

else:
 echo "yaşlı";
endif;

?>
