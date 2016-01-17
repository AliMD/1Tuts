#WTF / HTML Fundamentals / Editors

HTML **documents** are made up by HTML **elements**.

##HTML Elements
HTML elements are written with a **start** tag, with an **end** tag, with the **content** in between:

`<tagname>content</tagname>`

The HTML **element** is everything from the start tag to the end tag:

`<p>My first HTML paragraph.</p>`

Start tag	| Element content |	End tag
----------|-----------------|--------
`<h1>` | My First Heading |	`</h1>`
`<p>` |	My first paragraph. |	`</p>`
`<br />` |  |  	 

**Note:**	Some HTML elements do not have an end tag.

##Nested HTML Elements
HTML elements can be nested (elements can contain elements).
All HTML documents consist of nested HTML elements.
This example contains 4 HTML elements:
```html
<!DOCTYPE html>
<html>
<body>
  <h1>My First Heading</h1>
  <p>My first paragraph.</p>
</body>
</html>
```
[Try It Yourself](http://jsbin.com/bujeve/edit?html,output)

##HTML Example Explained
The `<html>` element defines the **whole document**.

It has a **start** tag `<html>` and an **end** tag `</html>`.

The element **content** is another HTML element (the `<body>` element).
```html
<html>
<body>
  <h1>My First Heading</h1>
  <p>My first paragraph.</p>
</body>
</html>
```
The `<body>` element defines the **document body**.

It has a **start** tag `<body>` and an **end** tag `</body>`.

The element **content** is two other HTML elements (`<h1>` and `<p>`).
```html
<body>
  <h1>My First Heading</h1>
  <p>My first paragraph.</p>
</body>
```
The `<h1>` element defines a **heading**.

It has a **start** tag `<h1>` and an **end** tag `</h1>`.

The element **content** is: My First Heading.
```html
<h1>My First Heading</h1>
```
The `<p>` element defines a **paragraph**.

It has a **start** tag `<p>` and an **end** tag `</p>`.

The element **content** is: My first paragraph.
```html
<p>My first paragraph.</p>
```

##Don't Forget the End Tag
Some HTML elements will display correctly, even if you forget the end tag:
```html
<html>
<body>
  <p>This is a paragraph
  <p>This is a paragraph
</body>
</html>
```
[Try It Yourself](http://jsbin.com/vemowo/edit?html,output)

The example above works in all browsers, because the closing tag is considered optional.

Never rely on this. It might produce unexpected results and/or errors if you forget the end tag.

##Empty HTML Elements
HTML elements with no content are called empty elements.

`<br />` is an empty element without a closing tag (the `<br />` tag defines a line break).

Empty elements can be "closed" in the opening tag like this: `<br />`.

HTML5 does not require empty elements to be closed. But if you want stricter validation, or you need to make your document readable by XML parsers, you should close all HTML elements.

##HTML Tip: Use Lowercase Tags
HTML tags are not case sensitive: `<P>` means the same as `<p>`.

The HTML5 standard does not require lowercase tags, but W3C **recommends** lowercase in HTML4, and **demands** lowercase for stricter document types like XHTML.

**Note:**	At W3Schools we always use lowercase tags.

---
Refrences: [Mozilla], [WebPlatform], [W3schools]

[simple html]: http://jsbin.com/johave/embed?html,output
[Mozilla]: http://developer.mozilla.org/en-US/docs/Web/HTML
[WebPlatform]: https://docs.webplatform.org/wiki/html
[W3schools]: http://www.w3schools.com/html/

