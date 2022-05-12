<?php
	/////////////////////////////////////////////////////////////////////////
	//                                                                     //
	//                       Created by Jake Hamblin                       //
    //                           jakehamblin.com                           //
	//                                                                     //
	//  FOR ALL THE VALUES, MAKE SURE TO KEEP THE QUOTATIONS AROUND THEM!  //
	//                                                                     //
	/////////////////////////////////////////////////////////////////////////

	/* GENERAL SITE INFORMATION  */
	// Name of your server/community
	$name = "Community Name";

	// Link to the website, with trailing slash
	$domain = "https://projects.jakehamblin.com/template2/";

	// Logo of your server/community
	$logo = $domain."images/logo.png";

	// Description of your server/community
	$description = "Description";

	// Discord Guild ID
	$guildid = "GUILDID";

	// Main Color
	$colorhex = "#0f7cff";

	// YouTube video ID (If you don't have/want one, just keep the value empty)
	$youtubeid = "";

	// Background image (Will appear on mobile and if YouTube video isn't defined)
	$backgroundimg = $domain."images/bg.png";

	// Discord invite link
	$discord = "discord";

	// Server IP
	$ip = "sub.yourdomain.tld";

	// Link one
	$link1name = "Home";
	$link1 = $domain;

	// Link two
	$link2name = "About";
	$link2 = $domain."about";

	// Link three
	$link3name = "Application";
	$link3 = $domain."application";

	// Middle link
	$mainbuttonname = "Discord";
	$mainbutton = $discord /*"" If you want to do a custom link, remove the /* */;

	// Link four
	$link4name = "Status";
	$link4 = $domain."status";

	// Link five
	$link5name = "Gallery";
	$link5 = $domain."gallery";

	// Link six
	$link6name = "News";
	$link6 = $domain."news";
	/* END GENERAL SITE INFORMATION */

	/* START ABOUT PAGE */
	$about = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor quis lorem nec convallis. Sed elementum, nulla gravida feugiat congue, nisi sem dapibus ex, vel iaculis ex nunc sit amet risus. Nulla nulla lorem, pulvinar ut rutrum a, iaculis ut sapien. Ut quis commodo dolor. Nullam ac diam imperdiet, dapibus est sed, venenatis mauris. Aliquam bibendum facilisis nibh, quis molestie magna luctus a. Sed leo arcu, suscipit a eleifend sit amet, auctor sed elit.";
	/* END ABOUT PAGE */

	/* START APPLICATION PAGE */
	// Use Recaptcha v2 for the form. You can create a Recaptcha key here: https://www.google.com/recaptcha/admin/create
	$recaptchasecretkey = "#";
	$recaptchasitekey = "#";
	$webhookurl = "https://discordapp.com/api/webhooks/######";
	$departments = [
		"San Andreas State Police",
		"Blaine County Sheriff's Office",
		"Los Santos Police Department",
		"Los Santos Fire Department",
		"Dispatch",
		"Civilian",
	];
	/* END APPLICATION PAGE */

	/* START STATUS PAGE */
	// 0 = automatic, 1 = operational, 2 = issues, 3 = offline
	$servers = [
		"Test Server 1" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "1",
		],
		"Test Server 2" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "2",
		],
		"Test Server 3" => [
			"IP" => "jakehamblin.com",
			"port" => "80",
			"status" => "3",
		],
		"Test Server 4" => [
			"IP" => "jakehamblin.com",
			"port" => "30120",
			"status" => "0",
		],
	];
	/* END STATUS PAGE */

	/* START GALLERY PAGE */
	$gallery = [
		"https://i.imgur.com/ABcLzqm.jpg",
		"https://i.imgur.com/2kBFbgF.jpg",
		"https://i.imgur.com/ZF0k8K5.jpg",
		"https://i.imgur.com/J36Nb1Y.jpg",
		"https://i.imgur.com/HjxIAmg.jpg",
	];
	/* END GALLERY PAGE */

	/* START NEWS PAGE */
	$news = [
		"Testing One" => [
			"message" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor quis lorem nec convallis. Sed elementum, nulla gravida feugiat congue, nisi sem dapibus ex, vel iaculis ex nunc sit amet risus. Nulla nulla lorem, pulvinar ut rutrum a, iaculis ut sapien. Ut quis commodo dolor. Nullam ac diam imperdiet, dapibus est sed, venenatis mauris. Aliquam bibendum facilisis nibh, quis molestie magna luctus a. Sed leo arcu, suscipit a eleifend sit amet, auctor sed elit.",
			"name" => "Jake Hamblin",
			"date" => "06/30/2020", /* In M-D-Y format */
		],
		"Testing Two" => [
			"message" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam tempor quis lorem nec convallis. Sed elementum, nulla gravida feugiat congue, nisi sem dapibus ex, vel iaculis ex nunc sit amet risus. Nulla nulla lorem, pulvinar ut rutrum a, iaculis ut sapien. Ut quis commodo dolor. Nullam ac diam imperdiet, dapibus est sed, venenatis mauris. Aliquam bibendum facilisis nibh, quis molestie magna luctus a. Sed leo arcu, suscipit a eleifend sit amet, auctor sed elit.",
			"name" => "Jake Hamblin",
			"date" => "06/30/2020", /* In M-D-Y format */
		],
	];
	/* END NEWS PAGE! */


	/* RANDOM PHP FUNCTIONS AND JOBS */
	// Convert HEX provided to RGB
	list($r, $g, $b) = sscanf($colorhex, "#%02x%02x%02x");
	$colorrgb = $r.", ".$g.", ".$b;

	// Make color darked
	$darkerpercent = ".5";
	$colordarker = $r*$darkerpercent.", ".$g*$darkerpercent.", ".$b*$darkerpercent;

	// Used for navbar links
	$linkarray = array("link1" => "$link1name#$link1", "link2" => "$link2name#$link2", "link3" => "$link3name#$link3", "mainbutton" => "$mainbuttonname#$mainbutton", "link4" => "$link4name#$link4", "link5" => "$link5name#$link5", "link6" => "$link6name#$link6");

	// Discord JSON decode
	$jsonIn = file_get_contents('https://discordapp.com/api/guilds/'.$guildid.'/widget.json');
    $JSON = json_decode($jsonIn, true);
    $membersCount = count($JSON['members']);
?>
