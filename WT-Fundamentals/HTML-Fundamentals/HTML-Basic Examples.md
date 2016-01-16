#WTF / HTML Fundamentals / HTML Basic Examples

Don't worry if these examples use tags you have not learned.
You will learn about them in the next chapters.

##HTML Documents
All HTML documents must start with a type declaration: ```<!DOCTYPE html>```.
The HTML document itself begins with ```<html>``` and ends with ```</html>```.
The visible part of the HTML document is between ```<body>``` and ```</body>```.
###Example
```html
<!DOCTYPE html>
<html>
<body>

<h1>My First Heading</h1>

<p>My first paragraph.</p>

</body>
</html>
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

##HTML Headings
HTML headings are defined with the ```<h1>``` to ```<h6>``` tags:
###Example
```html
<h1>This is a heading</h1>
<h2>This is a heading</h2>
<h3>This is a heading</h3>
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

##HTML Paragraphs
HTML paragraphs are defined with the ```<p>``` tag:
###Example
```html
<p>This is a paragraph.</p>
<p>This is another paragraph.</p>
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

##HTML Links
HTML links are defined with the ```<a>``` tag:
###Example
```html
<a href="http://www.w3schools.com">This is a link</a>
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>
The link's destination is specified in the href attribute. 
Attributes are used to provide additional information about HTML elements.

##HTML Images
HTML images are defined with the <img> tag.
The source file (src), alternative text (alt), and size (width and height) are provided as attributes:
###Example
```html
<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

:sparkles: You will learn more about attributes in a later chapter.
