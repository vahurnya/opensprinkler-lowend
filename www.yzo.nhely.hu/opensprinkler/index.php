<?php
 header("Access-Control-Allow-Origin: *"); ?>
 
<!DOCTYPE html>
<!--
 * OpenSprinkler App
 * Copyright (C) 2015 - present, Samer Albahra. All rights reserved.
 *
 * This file is part of the OpenSprinkler project <http://opensprinkler.com>.
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
-->
<html>
	<head>
		<title>OpenSprinkler</title>
		<meta name="viewport" content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta content="yes" name="apple-mobile-web-app-capable">
		<meta name="apple-mobile-web-app-title" content="OpenSprinkler">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="Content-Security-Policy" content="default-src 'self' data: gap: local: blob: http: https:; script-src 'self' data: gap: blob: local: https: ms-appx-web: 'unsafe-eval' 'unsafe-inline'; style-src 'self' 'unsafe-inline' https: blob:; media-src *; img-src 'self' file: https: http: blob: data: ms-appdata:; connect-src 'self' blob: data: gap: local: http: https:">
		<link rel="shortcut icon" href="img/favicon.ico">
		<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="css/jqm.css">
		<link rel="stylesheet" href="css/main.css">
		<script src="cordova.js"></script>
		<script src="js/jquery.js"></script>
		<script src="js/libs.js"></script>
		<script src="js/main.js"></script>
		<script src="js/jqm.js"></script>
	</head>

	<body>
		<div id="header" data-theme="b" data-role="header" data-position="fixed" data-tap-toggle="false">
			<h3 class="logo"></h3>
		</div>

		<div data-role="page" id="loadingPage"></div>

		<div data-role="panel" id="sprinklers-settings" data-position-fixed="true" data-theme="b" class="hidden">
			<ul data-role="listview" data-theme="b">
				<li class="multiSite">
					<select data-mini="true" id="site-selector"></select>
				</li>
				<li class="multiSite" data-icon="gear"><a href="#site-control" data-translate="Manage Sites"></a></li>
				<li data-icon="action"><a href="#" class="export_config" data-translate="Export Configuration"></a></li>
				<li data-icon="back"><a href="#" class="import_config" data-translate="Import Configuration"></a></li>
				<li data-icon="mail"><a href="https://openthings.freshdesk.com/widgets/feedback_widget/new?&widgetType=popup&screenshot=no&attachFile=no&formTitle=Help%20%26%20Support" target="_blank" class="iab iabNoScale" data-translate="Help & Support"></a></li>
				<li data-icon="info"><a href="#about" data-translate="About"></a></li>
				<li data-icon="location"><a href="#localization" data-translate="Localization"></a></li>
				<li class="hidden logout-button" data-icon="power"><a id="logout" href="#" data-translate="Logout"></a></li>
				<li class="hidden login-button"><a class="cloud-login" href="#" data-translate="OpenSprinkler.com Login"></a></li>
				<li data-role="list-divider" data-translate="Advanced"></li>
				<li data-icon="power"><a href="#" class="toggleOperation">
					<span data-translate="Disable"></span>
					<span> </span>
					<span data-translate="Operation"></span>
				</a></li>
				<li data-icon="lock" class="changePassword"><a href="#" data-translate="Change Password"></a></li>
				<li data-icon="alert"><a href="#" class="reboot-os" data-translate="Reboot OpenSprinkler"></a></li>
				<li data-icon="alert" class="localSite hidden"><a id="downgradeui" href="#" data-translate="Downgrade UI"></a></li>
				<li data-icon="info" class="weatherAdjust"><a href="#debugWU" class="squeeze" data-translate="System Diagnostics"></a></li>
			</ul>
		</div>

		<div data-role="panel" id="notificationPanel" data-position="right" data-position-fixed="true" data-theme="b">
			<ul></ul>
		</div>

		<a id="footer-menu" style="display:none" class="ui-panel-animate tight ui-corner-all ui-btn ui-btn-icon-notext ui-btn-inline ui-icon-grid" href="#"></a>

		<div id="footer" data-theme="b" data-role="footer" data-position="fixed" data-tap-toggle="false">
			<div id="footer-running"></div>
		</div>
	</body>
</html>
