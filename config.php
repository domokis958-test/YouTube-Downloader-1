<?php

/**********|| Thumbnail Image Configuration ||***************/
# $config['ThumbnailImageMode']=0;   // don't show thumbnail image
# $config['ThumbnailImageMode']=1;   // show thumbnail image directly from YouTube
$config['ThumbnailImageMode'] = 2;    // show thumbnail image by proxy from this server

/**********|| Video Download Link Configuration ||***************/
#$config['VideoLinkMode']='direct'; // show only direct download link
#$config['VideoLinkMode']='proxy'; // show only by proxy download link
$config['VideoLinkMode'] = 'both'; // show both direct and by proxy download links

/**********|| MP3 Download Link Configuration || 
*
* Basic method for converting Youtube Video or Audio to .mp3
* require server processing for running ffmpeg and aria2, also you may need to edit php "max_execution_time"
*
* FFMPEG for converting video or audio to .mp3
* Install: https://ffmpeg.org/download.html
*
* ARIA2 command line downloader with multi connection, using single connection (ffmpeg or curl) server download from youtube limited to 56KBps
* install: https://github.com/aria2/aria2/releases
*
***********************************************/
$config['MP3Enable'] = false; // enable or disable media conversion and download to mp3
$config['MP3ConvertVideo'] = false; // 'false' download adaptive audio only to save bandwidth.
                                    // 'true' failover to video download if adaptive audio format not available
$config['MP3Quality'] = '128k'; // 'number(k)' (64k, 80k, 96k, 112k, 128k, 160k, 192k) or 'high': bitrate quality of converted mp3
                                // set to 'high' to get and set highest quality
                                // info: highest Youtube audio bitrate is 160k, higher than that is maybe useless
$config['MP3TempDir'] = 'mp3temp'; // temporary download location for media  
$config['ffmpegPath'] = 'C:\Program Files (x86)\ffmpeg\ffmpeg.exe'; // ffmpeg location path
$config['aria2Path'] = 'C:\cygwin\bin\aria2c.exe'; // aria2 location path, 

/**********|| features ||***************/
$config['feature']['browserExtensions'] = true; // show links for install browser extensions? true or false

/**********|| Multiple IPs ||***************/
# You can enable this option if you are having problems with youtube IP limit / IP ban.
# This option will work only if the IP you add are available for the server.
# That means you have to buy some additionnal public IPs and assign these new static IPs to the server.
# This should work only if you have a dedicated server...
#
#
# Example of adding additional IPs to Ubuntu server 14.04 LTS
# !!!! Be very careful, you may block yourself !!!!
# !!!! If you are connecting to your server remotly by ssh. You would do this only if you know what you do !!!!
# !!!! This is only an example with a specific dedicated server (ovh.net) !!!!
#
# For this example, the main IP on the server is 123.456.789.001
# We want to add additionnal IPs 789.456.123.001 and 789.456.123.002
#
# Edit /etc/network/interfaces and put something like this:
#
# # The loopback network interface
# auto lo
# iface lo inet loopback
#
# # The Main server IP:
# auto eth0
# iface eth0 inet static
#     address 123.456.789.001
#     netmask 255.255.255.0
#     network 123.456.789.0
#     broadcast 123.456.789.255
#     gateway 123.456.789.254
#
# # Additionnal IP: 789.456.123.001
# auto eth0:0
# iface eth0:0 inet static
#     address 789.456.123.001
#     netmask 255.255.255.255
#     broadcast 789.456.123.001
#     gateway 123.456.789.254
#
# # Additionnal IP: 789.456.123.002
# auto eth0:1
# iface eth0:0 inet static
#     address 789.456.123.002
#     netmask 255.255.255.255
#     broadcast 789.456.123.002
#     gateway 123.456.789.254
#
# # Additionnal IP xxx.xxx.xxx.xxx
# auto eth0:2
# iface eth0:2 inet static
# (...)
#
# and so on for each IP you want to add....
#
#
# Reboot your server
# If you are having trouble and cannot connect anymore over ssh to your server,
# that means your new network configuration has errors...
# So be very careful before applying your configuration.
# Try it first on a local dev server before messing up with your pro server.
#
#
$config['multipleIPs'] = false; // enable multiple IPs support to bypass Youtube IP limit? true or false
$config['IPs'] = [
    //'xxx.xxx.xxx.xxx',
    //'xxx.xxx.xxx.xxx',
    //'xxx.xxx.xxx.xxx',
    //'xxx.xxx.xxx.xxx',
    //'xxx.xxx.xxx.xxx',
    // add as many ips as you want (they must be available in the server conf (ex: /etc/network/interfaces fro ubuntu/debian)
];

/**********|| Other ||***************/
// Set your default timezone
// use this link: http://php.net/manual/en/timezones.php
$config['default_timezone'] = 'Asia/Tehran';

// Debug mode
//$config['debug'] = true; // debug mode on
$config['debug'] = false; // debug mode off
