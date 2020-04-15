<?php

$Macro = fopen("Macro/Macro.xml", "w") or die("Unable to open file!");
$FadeTime = file_get_contents('Macro/FadeTime.txt');
$Macro_header = file_get_contents('Macro/header.txt');
$Macro_TXT = $Macro_header;
fwrite($Macro, $Macro_TXT);
$length = count($markers);
$i = 2;
$j =1;
while($j < $length){
$Macro_TXT = "<Macroline index=\"".($i)."\"><text>Store Sequ 1 Cue ".($j)." \"".($markers[$j][1])."\" Fade ".$FadeTime."  /m</text></Macroline>";
fwrite($Macro, $Macro_TXT);
$i= $i+1;
$Macro_TXT = "<Macroline index=\"".($i)."\">
<text>Assign Seq 1 Cue ".($j)." /trig=0 /info=\" \"</text>
</Macroline>";
fwrite($Macro, $Macro_TXT);
$i= $i+1;
$j=$j+1;
}
$Macro_TXT = "<Macroline index=\"".($i)."\">
<text>Store Page 1</text>
</Macroline>
<Macroline index=\"".($i+1)."\">
<text>Label Page 1 \"Page\"</text>
</Macroline>
<Macroline index=\"".($i+2)."\">
<text>Assign Seq 1 At Exec 1 Page 1</text>
</Macroline>
<Macroline index=\"".($i+3)."\">
<text>Label Sequence 1 \"CueList 1\"</text>
</Macroline>
<Macroline index=\"".($i+4)."\">
<text>Import \"TC\" at Timecode 1  /nc</text>
</Macroline>
</Macro>
</MA>";
fwrite($Macro, $Macro_TXT);

?>