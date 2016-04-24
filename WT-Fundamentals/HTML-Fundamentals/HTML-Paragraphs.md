# HTML Paragraphs 
HTML documents are divided into paragraphs.
## HTML paragraphs  
```html
The HTML <p> element defines a paragraph.
```
###Example  
```html
<p>This is a paragraph</p>
<p>This is another paragraph</p> 
```
####[Try yourself] (http://www.w3schools.com/html/tryit.asp?filename=tryhtml_paragraphs1)
```html
Note Browsers automatically add some white space before and after a paragraph.
```
##HTML Display
```html
You cannot be sure how HTML will be displayed.
Large or small screens, and resized windows will create different results.
With HTML, you cannot change the output by adding extra spaces or extra lines in your HTML code.
The browser will remove extra spaces and extra lines when the page is displayed.
Any number of spaces, and any number of new lines, count as only one space.
```
###Example
```html
<p>
This paragraph
contains a lot of lines
in the source code,
but the browser
ignores it.
</p>
<p>
This paragraph
contains a lot of spaces
in the source code,
but the browser
ignores it.
</p>
```
####[Try yourself] (http://www.w3schools.com/html/tryit.asp?filename=tryhtml_paragraphs2)
##Don't Forget the End Tag
Most browsers will display HTML correctly even if you forget the end tag:
###Example
```html
<p>This is a paragraph
<p>This is another paragrap
```
####[Try yourself] (http://www.w3schools.com/html/tryit.asp?filename=tryhtml_paragraphs0)
The example above will work in most browsers, but do not rely on it.
Forgetting the end tag can produce unexpected results or errors.  

Note Stricter versions of HTML, like XHTML, do not allow you to skip the end tag.
##HTML Line Breaks
```html
The HTML <br> element defines a line break. 
Use <br> if you want a line break (a new line) without starting a new paragraph:
```
###Example
```html
<p>This is<br>a para<br>graph with line breaks</p>
```
####[Try yourself] (http://www.w3schools.com/html/tryit.asp?filename=tryhtml_paragraphs)
```html
The <br> element is an empty HTML element. It has no end tag.
```
##The Poem Problem
This poem will display as one line:
###Example
```html
<p>
My Bonnie lies over the ocean.
My Bonnie lies over the sea.
My Bonnie lies over the ocean.
Oh, bring back my Bonnie to me.
</p>
```
####[Try yourself] (http://www.w3schools.com/html/tryit.asp?filename=tryhtml_poem)
##The HTML ```<pre>``` Element
```html
The HTML <pre> element defines preformatted text.  
The text inside a <pre> element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:
```
###Example
```html
<pre>
My Bonnie lies over the ocean.
My Bonnie lies over the sea.
My Bonnie lies over the ocean.
Oh, bring back my Bonnie to me.
</pre>
```
####[Try yourself] (http://www.w3schools.com/html/tryit.asp?filename=tryhtml_pre)
