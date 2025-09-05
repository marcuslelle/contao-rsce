# Custom Elements der Contao Konferenz 2024

Diese Custom Elements habe ich für meinen Vortrag auf der Contao Konferenz 2024 verwendet.

Alle Beispiele sind für Contao 5.x entstanden, weil ich auch Twig nutzen wollte.
Ich werde nach und nach die Beispiele noch erweitern, damit sie auch mit Contao 4.13 laufen. Denk bitte daran, dass Contao 4 schon bald endet (Februar 2026). Mehr erfährst im [Release-Plan von Contao](https://contao.org/de/release-plan).

## rsce_01

Erstmal ein ganz einfaches Element, mit vielen Standard Feldern.

## rsce_02

Achtung, das ist ein angepasstes TinyMCE-Template. Das muss direkt im Ordner /templates auf der obersten Ebene liegen.<br>
Oder du schreibtst einfach 'rte' => 'tinyMCE',

## rsce_03

Beim Namen habe ich zwei Varianten geschaffen:
1. Ein normales Textfeld.
2. Ein Select und ein Fremdschlüssel zur Mitglieder-Tabelle. So kannst du eine Auswahl mit einer Fremdtabelle realisieren.

Die Social Media Icons habe ich der Einfachheit halber von Fontawesome genommen. Ich würde heute in einem Live-Projekt keinen ganzen Iconfonts einbinden, schon gar nicht per externem Link.
Fürs Vorführen sollte es aber reichen.

## rsce_04

Im Prinzip eine Erweiterung der Teamliste aus Nummer 3. Hier ist ein Swiper-Slider drumherum gebaut.

## rsce_05

Eine Liste für Fortbildungen.<br>
Die Ausgabe wird immer nach Datum aufsteigend sortiert, egal, in welcher Reihenfolge wir sie eingeben.

## rsce_06

Ein Portfolio mit Tags. Die Besonderheit hier ist, dass bei Anlage eines neuen Tags das Element automatisch gespeichert wird und dann sofort in den einzelnen Einträgen im Element zur Verfügung steht.

## rsce_07a und ## rsce_07b

Wrapper für CSS Grid.