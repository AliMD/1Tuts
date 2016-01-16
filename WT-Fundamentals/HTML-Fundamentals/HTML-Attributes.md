#WTF / HTML Fundamentals / HTML Attributes

Attributes provide additional information about HTML elements.

##HTML Attributes
* HTML elements can have **attributes**
* Attributes provide **additional information** about an element
* Attributes are always specified in **the start tag**
* Attributes come in name/value pairs like: **name="value"**

##The lang Attribute
The document language can be declared in the ```<html>``` tag.
The language is declared in the **lang** attribute.
Declaring a language is important for accessibility applications (screen readers) and search engines:
###
```html
<!DOCTYPE html>
<html lang="en-US">
<body>

<h1>My First Heading</h1>
<p>My first paragraph.</p>

</body>
</html>
```
The first two letters specify the language (en). If there is a dialect, use two more letters (US).

##The title Attribute
HTML paragraphs are defined with the ```<p>``` tag.

In this example, the ```<p>``` element has a **title** attribute. The value of the attribute is **"About HTML"**:
###Example
```html
<p title="About HTML">
any content that you like to write...
</p>
```
<a class="jsbin-embed" href="http://jsbin.com/purayu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

:sparkles: 	When you move the mouse over the element, the title will be displayed as a tooltip.

##The href Attribute
HTML links are defined with the ```<a>``` tag. The link address is specified in the **href** attribute:
###Example
```html
<a href="http://www.google.com">This is a link</a>
```
<a class="jsbin-embed" href="http://jsbin.com/purayu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>
You will learn more about links and the <a> tag later in this tutorial.

##Size Attributes
HTML images are defined with the ```<img>``` tag.
The filename of the source (**src**), and the size of the image (**width** and **height**) are all provided as **attributes**:
###Example
```html
<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>
The image size is specified in pixels: width="104" means 104 screen pixels wide.
You will learn more about images and the <img> tag later in this tutorial.

##The alt Attribute
The **alt** attribute specifies an alternative text to be used, when an HTML element cannot be displayed.
The value of the attribute can be read by "screen readers". This way, someone "listening" to the webpage, i.e. a blind person, can "hear" the element.
###Example
```html
<img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">
```
<a class="jsbin-embed" href="http://jsbin.com/lowoxu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

##We Suggest: Always Use Lowercase Attributes
The HTML5 standard does not require lower case attribute names.
The title attribute can be written with upper or lower case like **Title** and/or **TITLE**.
W3C **recommends** lowercase in HTML4, and **demands** lowercase for stricter document types like XHTML.

:sparkles: Lower case is the most common. Lower case is easier to type.
:sparkles: At W3Schools we always use lower case attribute names.

##We Suggest: Always Quote Attribute Values
The HTML5 standard does not require quotes around attribute values.
The **href** attribute, demonstrated above, can be written as:
###Example
```html
<a href=http://www.w3schools.com>
```
<a class="jsbin-embed" href="http://jsbin.com/purayu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>
W3C **recommends** quotes in HTML4, and **demands** quotes for stricter document types like XHTML.
Sometimes it is **necessary** to use quotes. This will not display correctly, because it contains a space:
###Example
```html
<p title=About Web>
```
<a class="jsbin-embed" href="http://jsbin.com/purayu/embed?html,output">Try it Yourself</a><script src="http://static.jsbin.com/js/embed.min.js?3.35.9"></script>

:sparkles: Using quotes are the most common. Omitting quotes can produce errors. 
:sparkles: At W3Schools we always use quotes around attribute values.

##Single or Double Quotes?
Double style quotes are the most common in HTML, but single style can also be used.
In some situations, when the attribute value itself contains double quotes, it is necessary to use single quotes:
```html
<p title='John "ShotGun" Nelson'>
```
Or vice versa:
```html
<p title="John 'ShotGun' Nelson">
```
##Chapter Summary
* All HTML elements can have **attributes**
* The HTML **title** attribute provides additional "tool-tip" information
* The HTML href attribute provides address information for links
* The HTML **widt**h and **height** attributes provide size information for images
* The HTML **alt** attribute provides text for screen readers
* At W3Schools we always use **lowercase** HTML attribute names
* At W3Schools we always **quote** attributes with double quotes


