=== EU Funding Visibility Banner – Hungary ===
Contributors: banditoth
Donate link: https://www.bitfox.hu/termek/wordpress-eu-palyazatok-beepulo-modul-tamogatoi-szoftverlicensz/
Tags: eu, funding, projects, visibility, hungary
Requires at least: 6.2
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.4
License: GPL-3.0-or-later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Manage EU-funded project visibility information and a configurable corner banner for websites in Hungary.

== Description ==

EU Funding Visibility Banner – Hungary helps website owners display information about EU-funded projects. Add project details and display official visual identity blocks in a configurable corner banner, or show a standalone banner image without entering project data. Visitors can open project details in a popup or follow an optional custom URL.

The plugin includes official Széchenyi Terv Plusz / EU co-financing and RRF / NextGenerationEU graphics. You can also select an official project-specific image from the Media Library.

Features:

* Create, publish, and reorder project entries.
* Record beneficiary, project identifier, programme, description, objectives, results, funding amount, and other project details.
* Choose between project-based display and standalone banner display.
* Select a built-in banner image or a custom image from the Media Library.
* Set the banner position and independent top, bottom, left, and right spacing.
* Optionally set a custom click URL; otherwise, the project list opens in a popup.
* Optionally show a close button, remember dismissal for the browser session, or hide the banner after a selected time or on scroll.
* Display one project or all complete projects with the `[eusv_support id="123"]` and `[eusv_supports]` shortcodes.
* Load detailed project information only after a visitor opens the popup.

This plugin is an independent tool and is not affiliated with or endorsed by the European Union, the Hungarian Government, or any managing authority. It does not determine legal compliance. Always follow the requirements of the applicable grant agreement and the current guidance issued by the responsible authority.

== Installation ==

1. Upload the `eu-funding-visibility-banner-hungary` folder to `/wp-content/plugins/`, or install the ZIP through **Plugins → Add New Plugin → Upload Plugin**.
2. Activate **EU Funding Visibility Banner – Hungary** under **Plugins → Installed Plugins**.
3. Open **Pályázatok → Új pályázat felvétele** (Projects → Add New Project) and enter the required project information. Publish the project when it is ready to display.
4. Open **Pályázatok → Megjelenítés** (Projects → Display) to enable the corner banner and choose **Pályázatok alapján** (Project-based) or **Csak banner** (Banner only).
5. In project-based mode, publish at least one complete project. In banner-only mode, select a built-in or Media Library image.
6. Optionally configure the click URL, position, margins, close button, dismissal memory, and automatic hiding, then save the settings.
7. To place project information within page or post content, use `[eusv_support id="123"]` for one project or `[eusv_supports]` for all complete published projects. Replace `123` with the project post ID.

== Frequently Asked Questions ==

= Can I display the banner without entering project details? =

Yes. Enable the banner and choose **Banner only** in **Projects → Display**, then select a built-in or custom banner image.

= What happens when a visitor clicks the banner? =

If **Custom URL** is enabled and a URL is entered, the banner opens that URL. Otherwise, the plugin opens a popup containing complete published project details.

= Why is a project missing from the banner or popup? =

Only published projects with all required information and a valid official visual identity block are included. Edit the project and complete the fields shown as required.

= What does Remember dismissal store? =

When enabled, closing the banner stores the session cookie `eusv_banner_closed`. It expires when the browser session ends.

= Is the plugin an official EU or government service? =

No. It is an independent plugin and does not replace the requirements or advice of the relevant funding authority.

= Is the plugin free? =

All plugin functionality is available free of charge. An optional supporter software license does not add functionality and is not required.

== Repository ==

https://github.com/banditoth/wp-eu-finance-banner-hungary

== Changelog ==

= 1.0.4 =

* Fix safe banner markup output and ignore macOS Finder metadata.
* Improve the GitHub project documentation and automated release packaging.

= 1.0.3 =

* Updated the plugin name, slug, and setup instructions.
* Removed the custom CSS input field.
* Added prefixed shortcodes.

= 1.0.2 =

* Replaced the separate project listing page with a clickable popup that loads project information on demand.
* Replaced the supporter license admin menu item with an informational notice displayed on project admin screens.
* Added a WordPress.org-formatted readme.

= 1.0.1 =

* Added the Projects admin menu, built-in official information blocks, and automatically generated project titles.

== Upgrade Notice ==

= 1.0.4 =

Maintenance update with improved banner output and release packaging.

= 1.0.3 =

Use the updated setup instructions and prefixed shortcodes. The arbitrary custom CSS setting has been removed.
