# Mein CSS Grid Layout: So funktioniert meine Album-Sammlung

Ich habe ein Layout für meine Lieblingsalben erstellt, und der Star der Show ist **CSS Grid**. Damit kann ich meine Alben in einem ordentlichen Raster anzeigen, das sich auch super an verschiedene Bildschirmgrössen anpasst.

---

## 1. Der Grid-Container: Mein Hauptbereich für die Alben (`.album-grid-container`)

Das wichtigste Element ist mein `main`-Tag im HTML. Dem hab ich die Klasse `album-grid-container` verpasst, und das ist mein **Grid-Container**. Er hält alle meine einzelnen Album-Cover zusammen.

```css
.album-grid-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    row-gap: 25px;
    column-gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
}
```

- `display: grid`: Das ist der Startschuss. Damit sage ich dem Browser, dass das jetzt ein Grid ist. Alle anderen Grid-Befehle funktionieren nur, wenn das hier steht.

- `grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));`: Das ist der Knackpunkt für meine Spalten!
    - `repeat()`: Ich möchte, dass sich ein Muster wiederholt.

    - `auto-fit`: Es sagt dem Grid, dass es so viele Spalten nebeneinander legen soll, wie reinpassen, ohne dass etwas über den Rand rutscht. Wenn Platz ist, werden die Spalten aufgefüllt.
    - `minmax(200px, 1fr)`: Hier lege ich die Grösse jeder einzelnen Spalte fest.
        - `minmax()`: Definiert einen Grössenbereich.
        - `200px`: Jede Spalte soll mindestens 200 Pixel breit sein. Das ist wichtig, damit meine Alben auch auf kleinen Bildschirmen noch gut aussehen.
        - `1fr`: Steht für "Fractional Unit" (Bruchteilseinheit). Das bedeutet, dass jede Spalte den gleichen Anteil am verbleibenden Platz bekommt. Wenn also noch Platz im Browserfenster ist, verteilen sich die Spalten gleichmässig.
- `row-gap: 25px;`: Das ist der Abstand zwischen den Album-Reihen, also vertikal.
- `column-gap: 20px;`: Das ist der Abstand zwischen den Album-Spalten, also horizontal.
- `max-width: 1200px;`: Ich möchte nicht, dass meine Album-Sammlung auf riesigen Bildschirmen unendlich breit wird. Deswegen setze ich hier eine maximale Breite von 1200 Pixeln.
- `margin: 0 auto;`: Damit zentriere ich meinen ganzen Album-Container horizontal auf der Seite. Oben und unten kein Rand `(0)`, und links und rechts wird der verbleibende Platz automatisch verteilt `(auto)`.

##  2. Die Grid-Elemente: Meine einzelnen Alben (.album-item)
Jedes article-Element mit der Klasse album-item ist ein einzelnes Grid-Element. Diese werden dann vom Grid-Container automatisch schön angeordnet.
```CSS
.album-item {
    background-color: #2a2a2a;
    border: 1px solid #444;
    border-radius: 8px;
    padding: 15px;
    text-align: center;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
}
```
Diese Regeln kümmern sich hauptsächlich um das Aussehen jeder einzelnen Album-Karte:
- Die ersten paar Zeilen (`background-color`, `border`, `border-radius`, `padding`, `text-align`, `box-shadow`) machen meine Album-Karten schön dunkel, geben ihnen einen kleinen Rand, abgerundete Ecken, etwas Innenabstand, zentrieren den Text und werfen einen leichten Schatten für mehr Tiefe.
- `transition`: Damit werden die Effekte beim Drüberfahren mit der Maus (Hover-Effekte) schön weich animiert, nicht ruckartig.

```CSS
.album-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.5);
}
```
- `:hover`: Wenn ich mit der Maus über ein Album-Element fahre, passiert Folgendes:

    - `transform: translateY(-5px);`: Die Karte bewegt sich ganz leicht um 5 Pixel nach oben. Das sieht so aus, als würde sie "abheben".
    - `box-shadow`: Der Schatten wird etwas stärker, was den Effekt des Abhebens noch verstärkt.

