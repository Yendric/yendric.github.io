<body>
//this part gets the game info sent by the server when it requests the page
<?php
//Get the steamid (really the community id)
$communityid = $_GET["steamid"];
//Get the map name
$mapname = $_GET["mapname"];
//See if the second number in the steamid (the auth server) is 0 or 1. Odd is 1, even is 0
$authserver = bcsub($communityid, '76561197960265728') & 1;
//Get the third number of the steamid
$authid = (bcsub($communityid, '76561197960265728')-$authserver)/2;
//Concatenate the STEAM_ prefix and the first number, which is always 0, as well as colons with the other two numbers
$steamid = "STEAM_0:$authserver:$authid";
?>

<div id="title">
    Welcome to Tangled Gaming!
</div>

//shows the map name under the title
<div id="top_box">
    Current map: <?php echo "$mapname"; ?><br>

//this is the plain text part, basically just labels for the server info
<div id="dl_box">
    <div id="dl_left">
        Connection status:<br>
        Currently downloading:<br>
        Files to download:<br>
        Files remaining:
    </div>
//this is the part that shows the info from the server
    <div id="dl_right">
        <label id="status"></label><br>
        <label id="dfile"></label><br>
        <label id="files"></label><br>
        <label id="filesleft"></label>
    </div>
</div>

//some player information
<div id="community_box">
    <div id="com_left">
        Your community ID:<br>
        Your SteamID:<br>
    </div>
//this shows the users community ID and steam ID
    <div id="com_right">
        <?php echo "$communityid"; ?><br>
        <?php echo "$steamid"; ?><br>
    </div
</div>

//this part is java, it gets the info from the server
<script>

var status="", dfile="", files="", filesleft="";

function SetStatusChanged( status )
    {
        var status=status;
        document.getElementById("status").innerHTML=status;
    }
function DownloadingFile( fileName )
    {
        var dfile=fileName;
        document.getElementById("dfile").innerHTML=dfile;
    }
function SetFilesTotal( total )
    {
        var files=total;
        document.getElementById("files").innerHTML=files;
    }
function SetFilesNeeded( needed )
    {
        var filesleft=needed;
        document.getElementById("filesleft").innerHTML=filesleft;
    }

</script>

</body>