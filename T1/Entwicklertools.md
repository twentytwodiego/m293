# T1 Entwicklertools

## Punkt 3 – „Was sehen Sie hier?“ (ohne Seite neu zu laden)
Wenn ich den Reiter "Network" der Developer Tools öffnest ohne die Seite neu zu laden, siehst du gar nichts oder nur sehr wenige Einträge.

### Warum?
Weil der Network-Tab nur Netzwerkanfragen ab dem Zeitpunkt der Öffnung aufzeichnet. Wenn die Seite bereits geladen war, bevor ich die DevTools geöffnet habe, wurde der Netzwerkverkehr nicht protokolliert.

## Punkt 5 – „Was sehen Sie nun?“ (nach dem Neuladen)
Sobald ich die Seite neu lade, füllt sich die Liste im Reiter „Network“ mit vielen Dateien. Man sieht typischerweise:

### Typische Dateitypen:

| Typ | Beschreibung |
|---|---|
|HTML|Die Hauptstruktur der Seite|
|CSS|Design/Styling|
|JS (Javascript)|Interaktive Funktionen|
|PNG / JPG / SVG| Bilder und Icons|
|JSON | Daten, z.B aus Datenbank |

## Punkt 6 – „Liste manuell löschen“
Im Network-Tab kann ich über das 🚫 Verboten-Symbol oben links alle Dateien
die in der Liste sind löschen

## Übung 2 – Inspect Element

Ich habe eine Schweizer Nachrichtenseite geöffnet und mit Rechtsklick auf einen Titel geklickt. Das hat gut funktioniert, das richtige Element wurde in den DevTools angezeigt.

Dann wollte ich einen Paragraph untersuchen, aber ich bin in einem unsichtbaren Layout-Element gelandet. Die Seite war verschachtelt und deshalb war es schwieriger, genau das richtige Element zu treffen.
