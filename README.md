# Bitfox EU-projektek láthatósági banner Magyarországon

![A bővítmény logója](bitfox-funding-visibility-banner-eu-projects-hungary/assets/images/eu-banner-logo.png)

[![Kiadás](https://img.shields.io/github/v/release/banditoth/wp-eu-funding-visibility-banner-hungary?display_name=tag)](https://github.com/banditoth/wp-eu-funding-visibility-banner-hungary/releases)
[![Licenc: GPL-3.0-or-later](https://img.shields.io/badge/License-GPL--3.0--or--later-blue.svg)](LICENSE)
[![WordPress](https://img.shields.io/badge/WordPress-plugin-21759B?logo=wordpress&logoColor=white)](https://wordpress.org/)

Független Bitfox WordPress-bővítmény EU-finanszírozású projektek adatainak és láthatósági grafikáinak bemutatására magyarországi weboldalakon. Válassz projektalapú sarokbannert vagy önálló bannerképet, majd állítsd be, mi történjen kattintáskor.

> Ez független bővítmény. Nem áll kapcsolatban és nincs jóváhagyva az Európai Unió, a magyar kormány vagy bármely irányító hatóság által. Mindig kövesd a támogatási szerződésedben és a felelős hatóság aktuális útmutatójában foglaltakat.

## Funkciók

- **Két megjelenítési mód:** teljes, közzétett projektek hivatalos arculati blokkjainak megjelenítése, vagy bannerkép projektadatok nélkül.
- **Beépített grafikák:** Széchenyi Terv Plusz / EU társfinanszírozási vagy RRF / NextGenerationEU kép kiválasztása.
- **Egyedi bannerkép:** kép választása a WordPress Médiatárából.
- **Projektkezelés:** projektadatok rögzítése és sorrendjük módosítása, például kedvezményezett, projektazonosító, program, leírás, célok, eredmények és támogatási összeg.
- **Rugalmas kattintási működés:** projektadatok megnyitása igény szerint felugró ablakban, vagy egyedi célhivatkozás használata.
- **Pozíció és térköz:** sarok kiválasztása, valamint a felső, alsó, bal és jobb margó külön beállítása.
- **Opcionális láthatósági beállítások:** bezárógomb, bezárás megjegyzése a böngésző-munkamenetre, időzített elrejtés vagy elrejtés görgetéskor.
- **Rövidkódok:** egy projekt részleteinek beillesztése vagy minden teljes projekt listázása oldalon és bejegyzésben.
- **Kiadási ZIP-fájlok:** a címkézett Git-kiadásokból a GitHub Actions telepíthető WordPress ZIP-fájlt készít.

## Telepítés

### GitHub-kiadásból

1. Töltsd le a legfrissebb `bitfox-funding-visibility-banner-eu-projects-hungary-*.zip` fájlt a [Kiadások](https://github.com/banditoth/wp-eu-funding-visibility-banner-hungary/releases) oldalról.
2. A WordPressben nyisd meg a **Bővítmények → Új bővítmény hozzáadása → Bővítmény feltöltése** oldalt.
3. Válaszd ki a ZIP-fájlt, telepítsd, majd kapcsold be a **Bitfox EU-projektek láthatósági banner Magyarországon** bővítményt.

### Kézi telepítés

Másold a [`bitfox-funding-visibility-banner-eu-projects-hungary/`](bitfox-funding-visibility-banner-eu-projects-hungary/) mappát a `/wp-content/plugins/` könyvtárba, majd kapcsold be a **Bővítmények → Telepített bővítmények** oldalon.

## Beállítás

A WordPress adminfelületén nyisd meg a **Pályázatok → Megjelenítés** menüpontot.

1. Engedélyezd a sarokbannert.
2. Válaszd a **Pályázatok alapján** módot a teljes, közzétett projektek arculati elemeinek megjelenítéséhez, vagy a **Csak banner** módot projektadatok nélküli bannerképhez.
3. Csak banner módban válassz beépített képet vagy egy képet a Médiatárból.
4. Igény szerint adj meg egyedi hivatkozást. Ha nincs bekapcsolva, a bannerre kattintva a projektadatok felugró ablaka nyílik meg.
5. Állítsd be a sarkot, a margókat, a bezárógombot, a bezárás megjegyzését és az automatikus elrejtést.
6. Mentsd a beállításokat.

Projektalapú megjelenítéshez hozz létre egy projektet a **Pályázatok → Új pályázat felvétele** oldalon, töltsd ki a kötelező adatokat, majd tedd közzé. A nem teljes vagy közzé nem tett projektek nem jelennek meg a látogatóknak.

## Rövidkódok

| Rövidkód | Megjelenítés |
| --- | --- |
| `[eusv_support id="123"]` | Egy projekt részletes adatai. A `123` helyére a projekt bejegyzésazonosítója kerüljön. |
| `[eusv_supports]` | Minden teljes, közzétett projekt a beállított sorrendben. |

A projektadatok kívánt megjelenítési helyére illeszd be a rövidkódot bármely oldal vagy bejegyzés tartalmába.

## Kiadások automatizálása

A [`.github/workflows/release-plugin.yml`](.github/workflows/release-plugin.yml) munkafolyamat egy verziócímke, például `v1.0.6` feltolásakor indul el. Ellenőrzi, hogy a címke megegyezik-e a bővítmény verziójával, ellenőrzi a PHP- és JavaScript-szintaxist, elkészíti a telepíthető ZIP-fájlt, és csatolja azt a GitHub-kiadáshoz.

## Követelmények

- WordPress 6.2 vagy újabb
- PHP 7.4 vagy újabb

## Licenc

A bővítmény a [GNU General Public License 3.0 vagy újabb](LICENSE) licenc alatt érhető el.
