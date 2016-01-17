#WTF HTML Doctype

##Summary
In this article we explore the different doctypes you are likely to come across on your journey around the web, and look at how XHTML and HTML doctypes differ.

##Introduction
The doctype, as you might imagine, identifies the type of document that follows, and appears just above the `<html>` tag, at the very start of each HTML document:
```html
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>My fabulous document</title>

   ... etc.
```
The doctype tells the browser the type of HTML to expect, and therefore what validators (for example, the [W3C HTML validator][w3c html validator]) it should validate your document against.

##Standards versus quirks mode
The doctype also serves to make the browser render the page in "standards mode". In standards mode, browsers try to render the page according to the CSS specifications, in effect trusting that the person who created the document knew what they were doing.

On the other hand, if a browser finds an outdated, incomplete, or missing doctype at the start of the page, it will render the page using "quirks mode", which is more backward-compatible with older practices and browsers. Quirks mode assumes that the document was not created with web standards in mind. In practical terms it means that the web page will still render, but the browser will work a bit harder to do so, and you may get some unexpected display results. The differences are mostly about how the CSS is rendered, and only partly about how the actual HTML is treated. As a web designer or developer, you will get the most consistent results by making sure that all browsers use standards mode; thus, you should stick to web standards, and use a proper doctype.

##HTML & XHTML doctypes
Before returning to the HTML5 doctype, let's have a look at some of the doctypes you might also use.

###The HTML 4.01 strict doctype
```html
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
```
The HTML 4.01 strict doctype validates against the HTML 4.01 spec, although it doesn't allow any presentational markup or deprecated elements (like `<font>`) or framesets to be used. It validates loose HTML style markup, such as minimized attributes and non-quoted attributes (e.g., **required**, rather than **required="required"**).

###The HTML 4.01 transitional doctype
```html
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
```
The HTML 4.01 transitional doctype validates against the HTML 4.01 spec. It allows some presentational markup and deprecated elements (like `<font>`) but not framesets. It also validates loose HTML style markup.

###The XHTML 1.0 strict and transitional doctypes
The XHTML 1.0 strict doctype
```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
```
and transitional doctype
```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
```
are the exact XHTML 1.0 equivalents of the HTML 4.01 doctypes discussed above. Functionally they are the same, except that they don't validate loose HTML style markup — it all needs to be well formed XML.

###The HTML 4.01 and XHTML 1.0 frameset doctypes
If you want to use framesets and still have your markup validate, you can use one of these two doctypes:
```html
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">
```
```html
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd">
```
These are functionally the same as HTML 4.01 transitional and XHTML 1.0 transitional, respectively, but they allow the use of framesets. But please don't use framesets: they are not considered best practice, and their use is discouraged by most knowledgeable web authors and designers.

###The HTML5 doctype
By contrast, the HTML5 doctype is far simpler:
```html
<!DOCTYPE html>
```
There is no disadvantage to using this doctype, and it is certainly easier to remember than the others! You should begin using this doctype immediately, because even if you don't yet use HTML5-specific features in your work, it will still validate most of the HTML 4/XHTML 1.0 features. There are a couple of exceptions where features have been removed from the spec, but bear in mind that validation is merely a useful tool, and not the be-all and end-all of everything. Also, using the HTML5 doctype will help future-proof your web pages for when you do start using HTML5 features.

##HTML versus XML syntax
Table 1 shows the main syntax differences between HTML and XHTML:

|HTML |	XHTML|
|-----|------|
|Elements and attributes are case insensitive, e.g., `<h1>` is the same as `<H1>`.	| Elements and attributes are case sensitive; they are all lowercase.|
|Certain elements don't need a closing tag (e.g., paragraphs, `<p>`), while others (called "empty elements") shouldn't have a closing tag (e.g., images, `<img>`). | All elements must be explicitly closed (e.g., `<p>A paragraph</p>`). Elements without content should be closed using a slash in the start tag (e.g., `<hr/>`).|
|Attribute values may be written without being enclosed in quotes. | Attribute values must be enclosed by quotes.|
|Shorthand can be used for certain attributes (e.g., `<input required>`). |	The full attribute form must be used for all attributes (e.g., `<input required="required">`).|

In terms of what syntax style you should use, pick something you are comfortable with. A good recommendation is to start off using strict XHTML syntax, as it is guaranteed to work in any situation. Later on you can adjust your style, when you better understand what you are doing. Just remember these rules:

- If you are using the HTML5 doctype or an HTML 4.01 doctype, you can use whatever style you want
- If you are using an XHTML doctype, you must use XML well-formed syntax
- Whichever style you are using, best practice is to:
  - Close all open elements, for example `<p>paragraph</p>`, not `<p>paragraph`
  - Nest them properly, for example `<p>paragraph with bold <strong>word</strong></p>`, not `<p>paragraph with bold <strong>word</p></strong>`

That last rule is very important. If you don't properly nest your tags, your HTML will not be well formed, and CSS and JavaScript may not work reliably, as they rely on having a well-formed Document Object Model (DOM). For more on the HTML DOM, see [Growing trees][Growing trees].
  
####A note for teachers
Teachers often wonder what style they should teach beginning coders, and what doctype they should recommend. Although the HTML5 doctype is far simpler than the others, it allows you to use loose HTML style syntax, and so validating against the HTML5 doctype won't pick up markup that would be considered erroneous in XHTML. This is a shame, as strict XHTML syntax is a good style to teach beginners. So what should you do?

Well, the whole point of HTML5 having loose syntax is that much of it really doesn't actually matter in terms of how a page renders in a browser. HTML5 reflects more what web developers have actually done historically, rather than what the W3C thinks they should be doing now. Thus, you don't really need to stick to most of these rules; you can go forward with HTML5 using whatever syntax style you are used to. But when teaching newcomers, you need to recommend a style for them to use. The best combination is probably to use the HTML5 doctype, but to stick to the XHTML strict rules.

Below are some common remarks about HTML5's relaxed requirements and some reasoned "yes, but" responses.
* "HTML5 doesn't need closing tags." Yes, but you really should include them to make sure an unambiguous DOM is formed, which gives you the results you expect when you apply CSS and JavaScript to your HTML.

* "HTML5 doesn't need trailing slashes for empty tags." Yes, but you should include them for readability.

* "HTML5 is case insensitive." Yes, but you should absolutely stick to a consistent case style, because it can create confusion when students collaborate on projects. It can also create syntax errors; for example, if a student uses mixed case in file paths. Unix servers are case sensitive, while Windows servers are not. Also, your students won't always be working with HTML5 in the real world; they may come across pages that use HTML4 strict, or XHTML 1.0 transitional. Using XHTML syntax rules ensures that your HTML will work pretty much anywhere, regardless of doctype and style.

* "HTML5 doesn't require `<html>`, `<head>`, and `<body>` elements." Yes, but these elements are part of general best practice that coders should adhere to. Including `<head>` and `<body>` breaks up the code naturally into distinct areas, making it more readable. And including the `<html>` tag is important for other reasons such as JavaScript events and accessibility. You should also include a **lang** attribute to indicate the document's primary language, as a common best practice.

* "HTML5 allows stray text (not in a container)." Yes, but this is a very bad practice; it will likely result in a malformed DOM and subsequent display, CSS, and JavaScript errors.

* "HTML5 allows attribute values without quotes." Yes, but sometimes this breaks down, like when you have a **class** attribute containing two class names, like `<div class=one two>`. This would probably confuse the browser, causing it to treat **two** as a new attribute. Better to quote the values like this `<div class="one two"></div>` and avoid the problem.

Validating HTML5 for XHTML style syntax can be a bit of a pain. As a suggestion, you could use [http://validator.w3.org][w3c html validator], but set the doctype to "XHTML 1.0" instead of "detect automatically". This will validate your HTML5 document as XHTML 1.0, giving you more accurate and appropriate error messages. Of course, it will also give you error messages for the HTML5 elements, because they are undefined in XHTML 1.0.

##Serving "real" XML
You may also be interested to know that most of the XHTML on the Web is actually HTML written with well-formed XML syntax. Even if the doctype is an XHTML one, it will be sent to the client as HTML unless you:
* save the file with an **.xhtml** file extension, or
* include a line of code called the XML declaration before your doctype, which looks like this:
```html
<?xml version="1.0" encoding="UTF-8"?>
```
However, this second option is not recommended. Internet Explorer 6 and below switches into Quirks mode if it finds the XML declaration at the start of the document, which is bad, as we saw at earlier. In addition, IE 6-8 will try to download files saved as XHTML rather than display them in the browser, which you definitely do not want!

Therefore you should just stick to serving documents as HTML5, not proper XHTML.

##Conclusion
The HTML5 doctype is not only simpler than previous versions, but it buys you the most flexibility in coding style. That said, do not take that as an excuse to write overly loose code; follow best practices in general and XHTML 1.0 coding rules in particular, and you will have the best of both worlds.


[w3c html validator]: http://validator.w3.org/
[Growing trees]: http://www.w3.org/wiki/Traversing_the_DOM#Growing_trees
