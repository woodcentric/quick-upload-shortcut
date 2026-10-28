=== Upload Plugin Shortcut ===
Requires at least: 5.0
Requires PHP: 7.2
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Adds an Upload Plugin submenu beneath Plugins that opens the native WordPress ZIP upload form immediately.

== Installation ==
1. Go to Plugins > Add New Plugin > Upload Plugin.
2. Select upload-plugin-shortcut.zip and click Install Now.
3. Activate Upload Plugin Shortcut.
4. Use Plugins > Upload Plugin for subsequent ZIP uploads.

For WordPress multisite, install and Network Activate the plugin, then use Network Admin > Plugins > Upload Plugin.

== Behavior ==
Uses the native plugin-install.php?tab=upload screen. WordPress continues to handle validation, permissions, installation, and activation. Only users with both install_plugins and upload_plugins capabilities see the shortcut. It does not bypass host restrictions or disabled file modifications.

No settings, database entries, frontend scripts, or external requests. Deactivating the plugin removes the shortcut.

The shortcut opens the upload section; click Choose File to open your computer's file picker.

== Validation ==
Package structure and source reviewed against the WordPress core upload route. Not live-tested on a WordPress installation.
