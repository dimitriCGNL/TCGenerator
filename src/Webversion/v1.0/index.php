<!DOCTYPE html>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<html>
<head>
<title>Reaper time marker to GMA2 TC</title>
</head>
<body>

<h1>Reaper time marker to GrandMA2 TC Generator</h1>
<br>
<h3>Upload Time marker CSV File from Reaper (Note: set timeline of reaper to seconds otherwise this doesn't work)</h3>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    <label for="TrigMode">Choose a trigger mode:</label>
    <select id="TrigMode" name="TrigMode">
        <option value="Goto">Goto</option>
        <option value="Go">Go</option>
    </select>
    <br>
    <br>
    <label for="FPS">FPS of timecode:</label>
    <select id="FPS" name="FPS">
        <option value="24">24.00</option>
        <option value="25">25.00</option>
        <option value="30">29.97DF</option>
        <option value="30">29.97ND</option>
        <option value="30">30.00</option>
        <option value="24">23.976ND</option>
    </select><br><br>
      <label for="FadeTime">Fade Time in seconds:</label>
        <input type="text" id="FadeTime" name="FadeTime"><br><br>
    <input type="submit" value="Next" name="submit">
</form>
<br>
<br>
<br>
<br>
<h2>Updates on this tool will be posted on my github: https://github.com/dimitriCGNL/TCGenerator </h2>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h4>For support or bugs send a email to djdimi043@gmail.com</h4>
<h5>Code in this website is created and owned by Dimitri Croes and is not allowed to be used elsewhere.</h5>
</body>
</html>