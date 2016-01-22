#WTF HTML Headings

Headings are important in HTML documents.

##HTML Headings
Headings are defined with the <h1> to <h6> tags.
<h1> defines the most important heading. <h6> defines the least important heading.
###Example
```html
<h1>This is a heading</h1>
<h2>This is a heading</h2>
<h3>This is a heading</h3>
```
[Try it Yourself][simple html]

:sparkles: Browsers automatically add some empty space (a margin) before and after each heading.

##Headings Are Important
Use HTML headings for headings only. Don't use headings to make text **BIG** or **bold**.
Search engines use your headings to index the structure and content of your web pages.
Users skim your pages by its headings. It is important to use headings to show the document structure.
h1 headings should be main headings, followed by h2 headings, then the less important h3, and so on.

##HTML Horizontal Rules
The ```<hr>``` tag creates a horizontal line in an HTML page.
The hr element can be used to separate content:
###Example
```html
<p>This is a paragraph.</p>
<hr>
<p>This is a paragraph.</p>
<hr>
<p>This is a paragraph.</p>
```
[Try it Yourself][simple html2]

##The HTML ```<head>``` Element
The HTML ```<head>``` element has nothing to do with HTML headings.
The HTML ```<head>``` element contains **meta data**. Meta data are not displayed.
The HTML ```<head>``` element is placed between the <html> tag and the <body> tag:
###Example
```html
<!DOCTYPE html>
<html>

<head>
  <title>My First HTML</title>
  <meta charset="UTF-8">
</head>

<body>
.
.
.
```
[Try it Yourself][simple html3]

:sparkles: Meta data means data about data. HTML meta data is data about the HTML document.

##The HTML ```<title>``` Element
The HTML ```<title>``` element is meta data. It defines the HTML document's title.
The title will not be displayed in the document, but might be displayed in the browser tab.

##The HTML ```<meta>``` Element
The HTML ```<meta>``` element is also meta data.
It can be used to define the character set, and other information about the HTML document.

##More Meta Elements
In the chapter about HTML styles you discover more meta elements:
The HTML ```<style>``` element is used to define internal CSS style sheets.
The HTML ```<link>``` element is used to define external CSS style sheets.

##HTML Tip - How to View HTML Source
Have you ever seen a Web page and wondered "Hey! How did they do that?"
To find out, right-click in the page and select "View Page Source" (in Chrome) or "View Source" (in IE),
or similar in another browser. This will open a window containing the HTML code of the page.

---
Refrences: [Mozilla], [WebPlatform], [W3schools]

[simple html]: http://jsbin.com/xebivu/embed?html,output
[simple html2]: http://jsbin.com/xebivu/embed?html,output
[simple html3]: http://jsbin.com/zivova/embed?html,output
[Mozilla]: http://developer.mozilla.org/en-US/docs/Web/HTML
[WebPlatform]: https://docs.webplatform.org/wiki/html
[W3schools]: http://www.w3schools.com/html/
