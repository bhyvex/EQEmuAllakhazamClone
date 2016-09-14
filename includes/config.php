<?php

$SiteTitle = 'EQEmu Server AllaClone';
$ServerName = 'EQEmu Server';
$cfgversion = '2.0.1 - Rev2103';
$SiteEmail = '';

$dbhost = "localhost";
$dbname = "peq";
$dbuser = "username";
$dbpasswd = "password";

$root_url = 'http://www.myserver.com/AllaClone/';
$includes_url = $root_url . 'includes/';
$includes_dir = getcwd() . "/includes/";
$eqemu_dir = "/home/eqemu/server/";
$quests_dir = $eqemu_dir . "quests/";
$quests_datas = "/home/eqemu/server/quests/";
$maps_dir = getcwd() . "/maps/";
$maps_url = $root_url . "/maps/";
$npcs_dir = getcwd() . "/npcs/";
$npcs_url = $root_url . "/npcs/";
$icons_dir = getcwd() . "/icons/";
$icons_url = $root_url . "/icons/";
$images_url = $root_url . "/images/";
$charbrowser_url = "http://www.myserver.com/CharBrowser/"; // Set to "" to disable CharBrowser links for character names


$DefaultCSS = "allakhazam";

// Available Styles - ( allakhazam, dark_blue )
if (isset($_COOKIE["Theme"])) {
    if ($_COOKIE["Theme"] == "Dark Blue") {
        $CssStyle = "dark_blue";
    }
    if ($_COOKIE["Theme"] == "Allakhazam") {
        $CssStyle = "allakhazam";
    } else {
        $CssStyle = $DefaultCSS;
    }
} else {
    $CssStyle = $DefaultCSS;
}

// OPTIONS
$ServerMaxLevel = 80; // Max Level for Characters on the Server
$ServerMaxNPCLevel = 95; // Max Level for any NPCs on the Server
$MaxResultsPerPage = 15; // Max number of results per page for results that are paged
$AdjacentPages = 3; // How many adjacent pages to show for the pages bar
$MaxItemsReturned = 50; // max number of items returned by search engines (0=all)
$MaxNpcsReturned = 50; // max number of npcs returned by search engines (0=all)
$SpawngroupAroundRange = 100; // range of surrounding spawngroups, spawngroups page
$EnableNews = TRUE; // If TRUE, it enables the use of the News (requires SQL Source includes/sql/news.sql)
$ShowNpcDropChances = TRUE; // if TRUE, chances of droping of each item will be shown when browsing npcs
$MerchantsDontDropStuff = TRUE; // if TRUE, you won't see merchants drops, damned PEQ word builders ! :)
$ShowNPCNumberInZoneLevelList = TRUE; // choose between number and x for npcs in zone levels list
$SortZoneLevelList = TRUE; // sort or not the zones in zone levels list
$AllowQuestsNPC = FALSE; // quests for npcs are available from NPC's page
$AlwaysBuildQuest = FALSE; // rebuilds the quest each time a visitor browse it, put false if you don't modify them anymore
$GroupNpcsByName = TRUE; // groups the NPCs by their name in zone npcs lists
$HideInvisibleMen = TRUE; // hide the invisible mens in bestiaries
$ItemAddChanceToDrop = TRUE; // shows what are the chances to see the item droped by the npcs
$ShowNpcsAttackSpeed = TRUE; // shows informations about NPCs' attack speed
$ShowNpcsAverageDamages = TRUE; // How much NPC does as melee damages, in average, this allows to comparate mobs together
$DisplayNamedNPCsInfo = TRUE; // If TRUE, will display a link to show named NPCs and export to CVS for maps
$DisplayNPCStats = TRUE; // If TRUE, will display HP, Damage, Special Attacks, etc for NPCs
$TrackableNPCsOnly = TRUE; // If TRUE, will only display NPCs that are set to be trackable in search results
$DisplaySpawnGroupInfo = TRUE; // If TRUE, will display the spawngroup link from the zone pages
$DisplayTaskInfo = TRUE; // If TRUE, will allow search results to show tasks and rewards
$DisplayTaskActivities = TRUE; // If TRUE, will display all task activities
$AllowCSVOutputOptions = FALSE; // If TRUE, will display CSV output button for searches that allow them
$ItemFoundInfo = TRUE; // If TRUE, it displays where items can drop or be purchased (longer item page load times)
$MaxRecentlyDiscoveredItems = 25; // Max number of recently discovered items to display
$DiscoveredItemsMaxStatus = 20; // Max account status for a discovered item entry
$DiscoveredItemsOnly = FALSE; // If TRUE, only Discovered Items will be displayed
$UseSpellGlobals = FALSE; // If TRUE, any spells in the spell_globals table will not be displayed
$UseZAMSearch = TRUE; // If TRUE, will display a ZAM search bar on the left with the sidemenu

$UseCustomZoneList = FALSE; // If TRUE, will display only the custom zone list in the menu, otherwise it displays all but custom.
// For custom zone lists, set the file_name field of the zone table to a number (in the order you want them displayed)
// Then, set the notes field in the zone table to the note you want for the zone such as "Raid Tier1"
// You can block any zones from the custom zone list by adding "disabled" anywhere in the notes field

$ShowHeader = TRUE; // Shows the page header for each page
$UseWikiImages = FALSE; // Use Wiki added images for NPCs and other (not in use yet)
$IgnoreZones = array("load", "loading", "load2", "nektropos", "arttest", "apprentice", "tutorial");
$ShowAccount = FALSE; // (not in use yet)
$ShowCharacters = FALSE; // (not in use yet)

$db = mysql_connect($dbhost, $dbuser, $dbpasswd) or die("Impossible to connect to $dbhost : " . mysql_error());
mysql_select_db($dbname, $db) or die("Impossible to select $dbname : " . mysql_error());

?>
