#WTF HTML Basic Examples

Don't worry if these examples use tags you have not learned.  
You will learn about them in the next chapters.

##HTML Documents
All HTML documents must start with a type declaration: `<!DOCTYPE html>`.  
The HTML document itself begins with `<html>` and ends with `</html>`.  
The visible part of the HTML document is between `<body>` and `</body>`.
###Example
```html
<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
  <h1>My First Heading</h1>
  <p>My first paragraph.</p>
</body>

</html>
```
[Try it Yourself][body sample]

##HTML Headings
HTML headings are defined with the `<h1>` to `<h6>` tags:
###Example
```html
<h1>This is a heading</h1>
<h2>This is a heading</h2>
<h3>This is a heading</h3>
```
[Try it Yourself][h1 tags]

##HTML Paragraphs
HTML paragraphs are defined with the `<p>` tag:
###Example
```html
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
```
[Try it Yourself][p tag]

##HTML Links
HTML links are defined with the `<a>` tag:
###Example
```html
<a href="http://google.com">This is a link</a>
```
[Try it Yourself][a tag]

The link's destination is specified in the **href attribute**.   
Attributes are used to provide additional information about HTML elements.

##HTML Images
HTML images are defined with the `<img>` tag.  
The source file (**src**), alternative text (**alt**), and size (**width** and **height**) are provided as **attributes**:
###Example
```html
<img src="https://www.google.com/images/branding/googlelogo/1x/googlelogo_color_272x92dp.png" alt="Image" width="254" height="142" />
```
[Try it Yourself][img tag]

:sparkles: You will learn more about attributes in a later chapter.

---
Refrences: [Mozilla], [WebPlatform], [W3schools]

[body sample]: http://jsbin.com/sacane/embed?html,output
[h1 tags]: http://jsbin.com/maxole/embed?html,output
[p tag]: http://jsbin.com/mitota/embed?html,output
[a tag]: http://jsbin.com/xujubu/embed?html,output
[img tag]: http://jsbin.com/jefehi/embed?html,output
[Mozilla]: http://developer.mozilla.org/en-US/docs/Web/HTML
[WebPlatform]: https://docs.webplatform.org/wiki/html
[W3schools]: http://www.w3schools.com/html/
