=== Bitfox EU-projektek láthatósági banner Magyarországon ===
Contributors: banditoth
Donate link: https://www.bitfox.hu/termek/wordpress-eu-palyazatok-beepulo-modul-tamogatoi-szoftverlicensz/
Tags: eu, funding, projects, visibility, hungary
Requires at least: 6.2
Tested up to: 7.1
Requires PHP: 7.4
Stable tag: 1.0.6
License: GPL-3.0-or-later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

Független Bitfox-eszköz EU-finanszírozású projektek adatainak és láthatósági elemeinek megjelenítéséhez magyarországi weboldalakon.

== Leírás ==

A Bitfox EU-projektek láthatósági banner Magyarországon bővítmény segít megjeleníteni az EU-finanszírozású projektek adatait. Rögzítsd a projekt részleteit, és jeleníts meg hivatalos arculati elemeket egy beállítható sarokbannerben, vagy használj önálló bannerképet projektadatok megadása nélkül. A látogatók felugró ablakban tekinthetik meg a projektadatokat, vagy egy tetszőleges hivatkozást nyithatnak meg.

A bővítmény hivatalos Széchenyi Terv Plusz / EU társfinanszírozási és RRF / NextGenerationEU grafikákat tartalmaz. A Médiatárból egyedi, projekthez tartozó képet is választhatsz.

Funkciók:

* Projektek létrehozása, közzététele és sorrendjük módosítása.
* Kedvezményezett, projektazonosító, program, leírás, célok, eredmények, támogatási összeg és további projektadatok rögzítése.
* Projektalapú vagy önálló banneres megjelenítés.
* Beépített bannerkép vagy Médiatárból választott egyedi kép használata.
* Bannerpozíció és külön felső, alsó, bal és jobb margó beállítása.
* Egyedi kattintási hivatkozás megadása; ennek hiányában kattintásra a projektlista nyílik meg egy felugró ablakban.
* Bezárógomb, munkamenet alatti bezárásmegjegyzés, illetve időzítés vagy görgetés utáni elrejtés beállítása.
* Egy projekt vagy az összes teljes adatlap megjelenítése az `[eusv_support id="123"]` és `[eusv_supports]` rövidkódokkal.
* A részletes projektadatok betöltése csak a felugró ablak megnyitásakor.

Ez a bővítmény független eszköz, nem áll kapcsolatban az Európai Unióval, a magyar kormánnyal vagy bármely irányító hatósággal, és nem helyettesíti a jogszabályi vagy támogatási megfelelés ellenőrzését. Mindig kövesd a támogatási szerződésedben és a felelős hatóság aktuális útmutatójában foglaltakat.

== Telepítés ==

1. Töltsd fel a `bitfox-funding-visibility-banner-eu-projects-hungary` mappát a `/wp-content/plugins/` könyvtárba, vagy telepítsd a ZIP-fájlt a **Bővítmények → Új bővítmény hozzáadása → Bővítmény feltöltése** menüpontban.
2. A **Bővítmények → Telepített bővítmények** oldalon kapcsold be a **Bitfox EU-projektek láthatósági banner Magyarországon** bővítményt.
3. Nyisd meg a **Pályázatok → Új pályázat felvétele** oldalt, add meg a projekt adatait, majd tedd közzé a projektet.
4. A **Pályázatok → Megjelenítés** oldalon engedélyezd a sarokbannert, és válaszd a **Pályázatok alapján** vagy a **Csak banner** módot.
5. Projektalapú megjelenítéshez tegyél közzé legalább egy teljes projektet. Csak banner módban válassz beépített vagy Médiatárból származó képet.
6. Igény szerint állítsd be a hivatkozást, a pozíciót, a margókat, a bezárógombot, a bezárás megjegyzését és az automatikus elrejtést, majd mentsd a beállításokat.
7. Projektadatok beillesztéséhez használd az `[eusv_support id="123"]` rövidkódot egy projekthez, vagy az `[eusv_supports]` rövidkódot az összes teljes, közzétett projekthez. A `123` helyére írd a projekt bejegyzésazonosítóját.

== Gyakori kérdések ==

= Megjeleníthetem a bannert projektadatok megadása nélkül? =

Igen. Engedélyezd a bannert, majd a **Pályázatok → Megjelenítés** oldalon válaszd a **Csak banner** módot, és jelölj ki egy beépített vagy egyedi bannerképet.

= Mi történik, ha egy látogató a bannerre kattint? =

Ha engedélyezted az **Egyedi hivatkozás** beállítást és megadtál egy címet, a banner arra az oldalra visz. Egyébként a bővítmény egy felugró ablakban mutatja meg a teljes, közzétett projektadatokat.

= Miért nem jelenik meg egy projekt a bannerben vagy a felugró ablakban? =

Csak a közzétett, minden kötelező adattal és érvényes hivatalos arculati blokkal rendelkező projektek jelennek meg. Szerkeszd a projektet, és töltsd ki a kötelező mezőket.

= Mit tárol a bezárás megjegyzése? =

Ha engedélyezed, a banner bezárásakor a `eusv_banner_closed` munkamenet-süti jelzi, hogy a látogató már bezárta a bannert. A süti a böngésző-munkamenet végén lejár.

= Hivatalos EU-s vagy kormányzati szolgáltatás a bővítmény? =

Nem. Független bővítmény, és nem helyettesíti az illetékes támogatási hatóság előírásait vagy tanácsait.

= Ingyenes a bővítmény? =

A bővítmény minden funkciója ingyenesen használható. Opcionálisan támogató szoftverlicenc vásárolható, de ez nem ad hozzá új funkciókat, és nem szükséges a használathoz.

== GitHub-tárhely ==

https://github.com/banditoth/wp-eu-funding-visibility-banner-hungary

== Változásnapló ==

= 1.0.6 =

* Magyar nyelvű leírások és a WordPress.org bővítményikon hozzáadása.

= 1.0.5 =

* A név módosult, hogy független Bitfox-eszközként azonosítsa a bővítményt; frissült a WordPress.org-on kért közvetlen hivatkozás is.

= 1.0.4 =

* A banner biztonságos HTML-kimenetének javítása és a macOS Finder-fájlok kizárása.
* A GitHub dokumentációjának és az automatikus kiadási csomagolásnak a fejlesztése.

= 1.0.3 =

* A bővítménynév, a slug és a beállítási útmutató frissítése.
* Az egyedi CSS-mező eltávolítása.
* Egyedi előtagú rövidkódok hozzáadása.

= 1.0.2 =

* A külön projektlista-oldal cseréje kattintható felugró ablakra, amely csak megnyitáskor tölti be a projektadatokat.
* A támogató licenchez tartozó adminmenü cseréje a projektoldalakon megjelenő tájékoztatóra.
* WordPress.org-formátumú readme hozzáadása.

= 1.0.1 =

* Pályázatok adminmenü, beépített hivatalos tájékoztató blokkok és automatikusan létrehozott projektcímek hozzáadása.

== Frissítési tudnivalók ==

= 1.0.6 =

Magyar nyelvű bővítményleírás és a WordPress.org bővítményikon hozzáadása.

= 1.0.5 =

A bővítménynév és a csomag slugja független Bitfox-eszközként azonosítja a terméket.

= 1.0.4 =

Karbantartási kiadás biztonságosabb bannerkimenettel és fejlettebb kiadási csomagolással.

= 1.0.3 =

Használd a frissített beállítási útmutatót és az előtaggal ellátott rövidkódokat. Az egyedi CSS-beállítás megszűnt.
