# bitfox.creative.studio Funding Visibility Banner for EU Projects in Hungary

[![Release](https://img.shields.io/github/v/release/banditoth/wp-eu-funding-visibility-banner-hungary?display_name=tag)](https://github.com/banditoth/wp-eu-funding-visibility-banner-hungary/releases)
[![License: GPL-3.0-or-later](https://img.shields.io/badge/License-GPL--3.0--or--later-blue.svg)](LICENSE)
[![WordPress](https://img.shields.io/badge/WordPress-plugin-21759B?logo=wordpress&logoColor=white)](https://wordpress.org/)

An independent Bitfox WordPress plugin for presenting EU-funded project information and visibility graphics on Hungarian websites. Choose a project-based corner banner or a standalone banner image, then control what visitors see when they click it.

> This is an independent plugin. It is not affiliated with or endorsed by the European Union, the Hungarian Government, or any managing authority. Always follow the requirements of your grant agreement and the current guidance from the responsible authority.

## Features

- **Two display modes:** show official visual blocks from complete published projects, or show a banner image without creating project entries.
- **Built-in graphics:** select the included Széchenyi Terv Plusz / EU co-financing or RRF / NextGenerationEU image.
- **Custom banner image:** choose an image from the WordPress Media Library.
- **Project management:** add and reorder project information, including beneficiary, project ID, programme, description, objectives, results, and funding amounts.
- **Flexible click behavior:** open project details in an on-demand popup, or enable a custom destination URL.
- **Position and spacing controls:** choose a screen corner and set top, bottom, left, and right margins independently.
- **Optional visibility controls:** show a close button, remember dismissal for the browser session, hide after a chosen time, or hide on scroll.
- **Shortcodes:** embed details for one project or list all complete published projects in page and post content.
- **Release ZIPs:** tagged releases are packaged as installable WordPress plugin ZIP files by GitHub Actions.

## Install

### From a GitHub Release

1. Download the latest `bitfox-funding-visibility-banner-eu-projects-hungary-*.zip` from [Releases](https://github.com/banditoth/wp-eu-funding-visibility-banner-hungary/releases).
2. In WordPress, open **Plugins → Add New Plugin → Upload Plugin**.
3. Select the ZIP, install it, and activate **Bitfox Funding Visibility Banner for EU Projects in Hungary**.

### Manual installation

Copy the [`bitfox-funding-visibility-banner-eu-projects-hungary/`](bitfox-funding-visibility-banner-eu-projects-hungary/) folder to `/wp-content/plugins/`, then activate the plugin from **Plugins → Installed Plugins**.

## Configure

Open **Pályázatok → Megjelenítés** in the WordPress admin area.

1. Enable the corner banner.
2. Choose **Pályázatok alapján** to display official blocks from complete published projects, or **Csak banner** to display a banner image without project entries.
3. Choose a built-in image or select a custom image from the Media Library when using banner-only mode.
4. Optionally enable a custom URL. If it is off, clicking the banner opens the project details popup.
5. Set the corner, margins, close button, session dismissal memory, and optional automatic hiding.
6. Save the settings.

For project-based display, add a project from **Pályázatok → Új pályázat felvétele**, complete its required fields, and publish it. Incomplete or unpublished projects are excluded from the public listing.

## Shortcodes

| Shortcode | Displays |
| --- | --- |
| `[eusv_support id="123"]` | Detailed information for one project. Replace `123` with its project post ID. |
| `[eusv_supports]` | All complete published projects, in the configured order. |

Add a shortcode to the content of any page or post where you want the project information to appear.

## Release automation

The workflow in [`.github/workflows/release-plugin.yml`](.github/workflows/release-plugin.yml) runs when a version tag such as `v1.0.5` is pushed. It checks that the tag matches the plugin version, validates PHP and JavaScript syntax, builds the installable ZIP, and attaches it to a GitHub Release.

## Requirements

- WordPress 6.2 or newer
- PHP 7.4 or newer

## License

Distributed under the [GNU General Public License v3.0 or later](LICENSE).
