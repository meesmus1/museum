# 🏛️ Museum Moderniseren – QR-code systeem

> 🎓 GIP-project 2024–2025 – Provil | ICW6  
> 👨‍💻 Gerealiseerd door: Mees van der Heijden  
> 🎯 Doel: Een modern, interactief museumbezoek mogelijk maken via QR-codes en een dynamische webomgeving

---

## 📖 Over het project

Voor het GIP-project koos ik ervoor om een bestaande ervaring te vernieuwen: het schoolmuseum. Tot nu toe werd informatie over kunstwerken mondeling of via papieren bordjes overgebracht, wat niet altijd efficiënt of aantrekkelijk was.

Met dit project transformeerde ik het museum tot een interactieve digitale beleving. Elk kunstwerk wordt voorzien van een unieke QR-code. Bezoekers kunnen deze scannen met hun smartphone en zo automatisch worden doorgestuurd naar een informatieve webpagina over dat kunstwerk. De inhoud is eenvoudig aanpasbaar via een beheeromgeving, zodat het museum flexibel blijft.

---

## ❓ Probleemstelling

Het traditionele museumbezoek verliep beperkt qua informatie, niet interactief en weinig toegankelijk.  
We wilden dit oplossen door:

- 📱 QR-codes toe te voegen aan elk kunstwerk
- 🖥️ Webpagina’s automatisch te genereren voor elk kunstwerk
- 🔊 Optionele voorleesfunctionaliteit te voorzien voor toegankelijkheid
- 🛠️ Eenvoudig beheer toe te voegen via een databasekoppeling

---

## 🧠 Plan van Aanpak

1. **Structuur opzetten** – basis van de website bouwen (HTML/CSS)
2. **Database ontwerpen** – kunstwerken opslaan met info en afbeelding
3. **QR-generator integreren** – automatisch een QR genereren voor elk kunstwerk
4. **Dynamische pagina’s** – PHP gebruiken om content automatisch op te halen
5. **Beheeromgeving** – kunstwerken toevoegen, bewerken of verwijderen
6. **Testen en finetunen** – inclusief mobielvriendelijk maken

---

## 🧰 Hardware & Software

| Technologie        | Toelichting                                                   |
|--------------------|----------------------------------------------------------------|
| **HTML & CSS**     | Structuur en styling van de webpagina’s                        |
| **PHP**            | Server-side scripting om dynamisch pagina’s op te bouwen       |
| **MySQL Database** | Opslag van kunstwerken, titels, beschrijvingen, QR-links       |
| **JavaScript**     | Interactieve elementen zoals knoppen of animaties              |
| **QR API**         | Externe API gebruikt voor het genereren van unieke QR-codes    |

---

## 🛠️ Realisatie

We begonnen met het uitwerken van een eenvoudige database waarin we alle kunstwerken konden opslaan. Elk record bevatte een titel, afbeelding, beschrijving en een unieke link.

Via een beheersysteem kan het museumteam zelf eenvoudig kunstwerken toevoegen. Bij elke toevoeging wordt automatisch een QR-code gegenereerd, die gelinkt is aan een detailpagina over het werk.

Elke pagina is mobielvriendelijk en kan optioneel worden voorzien van een voorleesfunctie om het toegankelijk te maken voor iedereen.

---

## ✅ Besluit

Met ons project hebben we een traditionele museumervaring getransformeerd naar een moderne en inclusieve oplossing.  
De combinatie van digitale weergave, automatische webpagina’s, voorleesfunctionaliteit en QR-codes zorgt ervoor dat bezoekers op een interactieve en toegankelijke manier meer kunnen leren over kunstwerken.

Tegelijk is het voor het museum eenvoudig om informatie toe te voegen of aan te passen.  
De opdracht gaf me een goed inzicht in het werken met webtechnologieën en het belang van gebruiksvriendelijkheid en toegankelijkheid in softwareontwikkeling.
