# Container Uebung 1 

## Gefundener Fehler:

Der HTML-Validator meldete folgenden Fehler:

> **Error: Element `<div>` not allowed as child of element `<button>` in this context.**

Das bedeutet, dass innerhalb eines `<button>`-Elements ein `<div>`-Element verwendet wurde. Laut HTML-Standards ist das nicht erlaubt, da `<button>` nur sogenannte phrasing content enthalten darf, also z. B. `<span>`, `<img>`, `<svg>` – aber keine Blockelemente wie `<div>`.

### Warum ist das ein Problem?

Obwohl viele Browser diesen Fehler „verzeihen“ und die Seite trotzdem anzeigen, kann es zu Problemen bei:
- **Barrierefreiheit (z. B. Screenreadern)**
- **Zukunftssicherheit**
- **Validität des HTML-Codes**

### Beispiel (falsch):
```html
<button>
  <div>Text</div> <!-- nicht erlaubt -->
</button>
```
Beispiel (richtig):
```html
<button>
  <span>Text</span> <!-- korrekt -->
</button>
```