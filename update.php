<?php


require_once("dbCon.php");




$blubb = "UPDATE `usr_web231_9`.`services` SET `short_DE` = 'Ihre App erzählt Geschichten ...', `description_DE` = '... aber normalerweise hört ihr niemand zu.

Haben Sie jemanden, der täglich die wichtigsten Performance-Zahlen Ihrer Apps analysiert? Der auch einen Blick über den Tellerrand wagt und diese mit den Zahlen des Mitbewerbs vergleicht? Der daraus die richtigen Schlüsse zieht und Sie mit konkreten Handlungsempfehlungen versorgt?

Und haben Sie jemanden, dessen Kennziffern-Horizont nicht bei der Zahl der Downloads steckengeblieben ist?

Nein? Dann sollten Sie [URL=mailto:sales@allaboutapps.at]uns kontaktieren[/URL] und sich unverbindlich nach dem all about apps Monitoring erkundigen ...', `description_EN` = '... but most likely nobody listens to it.

Do you have someone who is analyzing your most important performance indicators for your Apps on a daily basis? Who is not restricted in one''s thinking and able to compare these numbers with those of your competition? Who draws the right conclusions and comes up with the correct recommendations for action?

And finally, do you have someone whose performance indicator knowledge is not restricted to the number of downloads?

You don''t? Then you should [URL=mailto:sales@allaboutapps.at]contact us[/URL] and inquire a tentative offer about the all about apps Monitoring services ...' WHERE `services`.`ID` = 5";


$sql = mysql_query($blubb);
  echo mysql_error();