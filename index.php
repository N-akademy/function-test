<?php

function writeSecretSentence ($animal , $nature): string
{
 return($animal . ' s\'incline face '. $nature);
}

echo writeSecretSentence('Le loup',' à la lune');
echo (' ');
echo writeSecretSentence(' Le lion',' au soleil');
