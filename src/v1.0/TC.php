<?php

$TC = fopen("TC/TC.xml", "w") or die("Unable to open file!");
$TRIG = file_get_contents('TC/Trigmode.txt');
$TC_header = file_get_contents('TC/header.txt');
$FPS = file_get_contents('TC/FPS.txt');
$TC_TXT = $TC_header;
fwrite($TC, $TC_TXT);



$TC_TXT = "  <Timecode frame_format=\"".$FPS." FPS\" name=\"timecode 1\" index=\"0\" lenght=\"108000000\" xmlns=\"\">

    <Track index=\"0\" expanded=\"true\" active=\"true\">

      <Object name=\"CueList 1\">

        <No>".$FPS."</No>

        <No>1</No>

        <No>1</No>

        <No>1</No>

      </Object>

<SubTrack index=\"0\">";
fwrite($TC, $TC_TXT);
$length = count($markers) -1;
$i = 0;
while($i < $length){
$TC_TXT = "<Event index=\"".$i."\" ";
fwrite($TC, $TC_TXT);

$TC_TXT = "step=\"".($i+1)."\"  ";
fwrite($TC, $TC_TXT);

$TC_TXT = "pressed=\"true\" command=\"".$TRIG."\"  ";
fwrite($TC, $TC_TXT);

$TC_TXT = "time=\"".(($markers[$i +1][2])*$FPS)."\">";
fwrite($TC, $TC_TXT);

$TC_TXT = "<Cue name=\"".$markers[$i +1][1]."\"><No>1</No><No>1</No><No>".($i+1)."</No></Cue></Event>";
fwrite($TC, $TC_TXT);

$i= $i+1;
}

$TC_footer = file_get_contents('TC/footer.txt');
$TC_TXT = $TC_footer;
fwrite($TC, $TC_TXT);

?>