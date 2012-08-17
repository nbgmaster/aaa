
<!-- saved from url=(0055)http://www.phpcaptcha.org/downloads/securimage_test.php -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1"><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/document_iterator.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/find_proxy.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/get_html_text.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/global_constants.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/name_injection_builder.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/number_injection_builder.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/menu_injection_builder.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/string_finder.js"></script><script src="chrome-extension://lifbcibllhkdhoafpjfnlhfpfgnpldfl/change_sink.js"></script><meta name="document_iterator.js"><meta name="find_proxy.js"><meta name="get_html_text.js"><meta name="global_constants.js"><meta name="name_injection_builder.js"><meta name="number_injection_builder.js"><meta name="menu_injection_builder.js"><meta name="string_finder.js"><meta name="change_sink.js"></head><body><div id="StayFocusd-infobar" style="display:none;"><img src="chrome-extension://laankejkbhbdhmipfmgcngdelahlfoji/img/eye_19x19_red.png"><span id="StayFocusd-infobar-msg"></span><span id="StayFocusd-infobar-links"><a href="http://www.phpcaptcha.org/downloads/securimage_test.php#" id="StayFocusd-infobar-never-show">Immer ausblenden</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="http://www.phpcaptcha.org/downloads/securimage_test.php#" id="StayFocusd-infobar-hide">Diesmal ausblenden</a></span></div><meta name="VeeHD" content="plugin for corp"><pre style="word-wrap: break-word; white-space: pre-wrap;">&lt;?php
/**
 * Securimage Test Script
 * Version 3.1 - 2012-04-06
 *
 * Upload this PHP script to your web server and call it from the browser.
 * The script will tell you if you meet the requirements for running Securimage.
 * It also checks for common problems with PHP sessions that prevent Securimage from working.
 *
 * http://www.phpcaptcha.org
 */

if (version_compare(PHP_VERSION, '5.2.0', '&lt;')) {
	echo 'Securimage requires PHP 5.2.0 or greater in order to run.  You are '
	    .'using ' . PHP_VERSION . ' which is very outdated.  Please consider '
	    .'upgrading to a newer, more secure version of PHP.&lt;br /&lt;br /&gt;'
	    .'Alternatively, you can use Securimage 2.0, but it is not advised.';
	exit;
}

$GLOBALS['session_start_error'] = null;

$level = error_reporting(0);
set_error_handler('session_error_handler', E_ALL);

session_name('securimage_test');
$sessionStarted = @session_start();

restore_error_handler();

session_test();


if (isset($_GET['testimage']) &amp;&amp; $_GET['testimage'] == '1') {
    $im    = imagecreate(225, 225);
    $white = imagecolorallocate($im, 255, 255, 255);
    $black = imagecolorallocate($im,   0,   0,   0);
    $red   = imagecolorallocate($im, 255,   0,   0);
    $green = imagecolorallocate($im,   0, 255,   0);
    $blue  = imagecolorallocate($im,   0,   0, 255);

    // draw the head
    imagearc($im, 100, 120, 200, 200,  0, 360, $black);

    // mouth
    imagearc($im, 100, 120, 150, 150, 25, 155, $red);

    // left and then the right eye
    imagearc($im,  60,  95,  50,  50,  0, 360, $green);
    imagearc($im, 140,  95,  50,  50,  0, 360, $blue);
    imagestring($im, 5, 15, 1, 'Securimage Will Work!!', $blue);
    imagestring($im, 2, 5, 20, ':) :) :)', $black);
    imagestring($im, 2, 5, 30, ':) :)', $black);
    imagestring($im, 2, 5, 40, ':)', $black);
    imagestring($im, 2, 150, 20, '(: (: (:', $black);
    imagestring($im, 2, 168, 30, '(: (:', $black);
    imagestring($im, 2, 186, 40, '(:', $black);
    
    header('Content-type: image/png');
    imagepng($im, null, 3);
    exit;
}

function session_test()
{
	if (!isset($_GET['testimage'])) {
		if (isset($_GET['tested'])) {
			if (!isset($_SESSION['securimage_test_value'])) {
				$GLOBALS['session_start_error'] = 
					"The session started successfully, but the test value "
				   ."was not found.&lt;br /&gt;Click &lt;a href=\"{$_SERVER['PHP_SELF']}\"&gt;"
				   ."here&lt;/a&gt; to try the test again.&lt;br /&gt;Make sure cookies are enabled in your browser.&lt;br /&gt;";
			}
		} else {
			if ($GLOBALS['session_start_error'] != null) {
				echo '&lt;strong&gt;Failed to start the PHP session.&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt;'
				    .'The &lt;a href="http://php.net/sessions" target="_blank"&gt;session&lt;/a&gt;'
				    .' did not start properly.  This could indicate a problem '
				    .'the PHP configuration on this server.&lt;br /&gt;&lt;br /&gt;'
				    .'The following error occurred when attempting to call &lt;i&gt;session_start()&lt;/i&gt;:&lt;br /&gt;'
				    .'&lt;pre style="margin: 25px"&gt;' . htmlspecialchars($GLOBALS['session_start_error']) . '&lt;/pre&gt;'
				    .'&lt;span style="color: #f00"&gt;In order for Securimage to work, you '
				    .'must resolve the error.&lt;/span&gt;&lt;br /&gt;&lt;br /&gt;'
				    .'If after searching &lt;a href="https://google.com" target="_blank"&gt;Google&lt;/a&gt; '
				    .'and &lt;a href="http://stackoverflow.com/search" target="_blank"&gt;StackOverflow&lt;/a&gt; '
				    .'for causes to the problem and you still cannot resolve the error, contact '
				    .'&lt;a href="http://phpcaptcha.org/contact" target="_blank"&gt;the developers&lt;/a&gt; '
				    .'of Securimage for assistance.&lt;br /&gt;Provide as much information about the problem '
				    .' and error as possible, and we can help resolve the issue.';
				exit;
			}
			
			$_SESSION['securimage_test_value'] = 'test';
			header('Location: ' . $_SERVER['PHP_SELF'] . '?tested=1');
			exit;
		}
	}
}

function print_status($supported)
{
    if ($supported) {
         echo "&lt;span style=\"color: #00f\"&gt;Yes!&lt;/span&gt;";
    } else {
        echo "&lt;span style=\"color: #f00; font-weight: bold\"&gt;No&lt;/span&gt;";
    }
}

function session_error_handler($errno, $errstr, $errfile, $errline)
{
	$GLOBALS['session_start_error'] = $errstr;
	return true;
}

?&gt;
&lt;html&gt;
&lt;head&gt;
&lt;title&gt;Securimage Test Script&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
&lt;h2&gt;Securimage Test Script&lt;/h2&gt;
&lt;p&gt;This script will test your PHP installation to see if Securimage will run on your server.&lt;/p&gt;
&lt;ul&gt;
&lt;li&gt;&lt;strong&gt;Session Functionality:&lt;/strong&gt;
&lt;?php print_status($GLOBALS['session_start_error'] == null); ?&gt;
&lt;?php if ($GLOBALS['session_start_error'] != null): ?&gt;
&lt;br /&gt;&lt;span style="color: #f00"&gt;There may be a problem with session support.&lt;/span&gt;&lt;br /&gt;&lt;?php echo $GLOBALS['session_start_error'] ?&gt;
&lt;br /&gt;
&lt;?php endif; ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;GD Support:&lt;/strong&gt;
&lt;?php print_status($gd_support = extension_loaded('gd')); ?&gt;
&lt;/li&gt;
&lt;?php if ($gd_support) $gd_info = gd_info(); else $gd_info = array(); ?&gt;
&lt;?php if ($gd_support): ?&gt;
&lt;li&gt;&lt;strong&gt;GD Version:&lt;/strong&gt;
&lt;?php echo $gd_info['GD Version']; ?&gt;&lt;/li&gt;
&lt;?php endif; ?&gt;
&lt;li&gt;&lt;strong&gt;imageftbbox function:&lt;/strong&gt;
&lt;?php print_status(function_exists('imageftbbox')); ?&gt;
&lt;?php if (function_exists('imageftbbox') == false): ?&gt;
&lt;br /&gt;The &lt;a href="http://php.net/imageftbbox" target="_new"&gt;imageftbbox()&lt;/a&gt; function is not included with your gd build.  This function is required.
&lt;?php endif; ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;TTF Support (FreeType):&lt;/strong&gt;
&lt;?php print_status($gd_support &amp;&amp; $gd_info['FreeType Support']); ?&gt;
&lt;?php if ($gd_support &amp;&amp; $gd_info['FreeType Support'] == false): ?&gt;
&lt;br /&gt;No FreeType support.  You cannot use Securimage 3.0, but can use 2.0 with gd fonts.
&lt;?php endif; ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;JPEG Support:&lt;/strong&gt;
&lt;?php print_status($gd_support &amp;&amp; ((isset($gd_info['JPG Support']) || isset($gd_info['JPEG Support'])))); ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;PNG Support:&lt;/strong&gt;
&lt;?php print_status($gd_support &amp;&amp; $gd_info['PNG Support']); ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;GIF Read Support:&lt;/strong&gt;
&lt;?php print_status($gd_support &amp;&amp; $gd_info['GIF Read Support']); ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;GIF Create Support:&lt;/strong&gt;
&lt;?php print_status($gd_support &amp;&amp; $gd_info['GIF Create Support']); ?&gt;&lt;/li&gt;
&lt;li&gt;&lt;strong&gt;SQLite Support:&lt;/strong&gt;
&lt;?php print_status(function_exists('sqlite_open')); ?&gt;&lt;br /&gt;
&lt;?php if (function_exists('sqlite_open')): ?&gt;
SQLite is available.  If you choose to use it, Securimage can support users who do not accept cookies.
&lt;?php else: ?&gt;
No SQLite support. Securimage will work but your visitors must accept cookies.
&lt;?php endif; ?&gt;
&lt;/li&gt;
&lt;/ul&gt;

&lt;?php if ($gd_support &amp;&amp; function_exists('imageftbbox')): ?&gt;
&lt;?php if ($GLOBALS['session_start_error'] != null): ?&gt;
There is a warning, but otherwise you meet the requirements for using Securimage.
&lt;?php else: ?&gt;
Your server meets the requirements for using Securimage!
&lt;?php endif; ?&gt;
&lt;br /&gt;&lt;br /&gt;
&lt;img src="&lt;?php echo $_SERVER['PHP_SELF']; ?&gt;?testimage=1" alt="Test Image" align="bottom" /&gt;
&lt;?php else: ?&gt;
Based on the requirements, you do not have what it takes to run Securimage :(
&lt;?php endif; ?&gt;
&lt;/body&gt;
&lt;/html&gt;

</pre></body><span id="skype_highlighting_settings" display="none" autoextractnumbers="1"></span><object id="skype_plugin_object" location.href="http://www.phpcaptcha.org/downloads/securimage_test.php" location.hostname="www.phpcaptcha.org" style="position: absolute; visibility: hidden; left: -100px; top: -100px; " width="0" height="0" type="application/x-vnd.skype.click2call.chrome.5.7.0"></object></html>