# CSS How To

When a browser reads a style sheet, it will format the HTML document according to the information in the style sheet.

<hr />

## Three Ways to Insert CSS

There are three ways of inserting a style sheet:

* External style sheet
* Internal style sheet
* Inline style

<hr />

## External Style Sheet

With an external style sheet, you can change the look of an entire website by changing just one file!

Each page must include a reference to the external style sheet file inside the `<link>` element. The `<link>`element goes inside the `<head>` section:

[Try it Yourself][Add CSS link To HTML]

An external style sheet can be written in any text editor. The file should not contain any html tags. The style sheet file must be saved with a .css extension.

Here is how the "myStyle.css" looks:

```CSS
body {
    background-color: lightblue;
}

h1 {
    color: navy;
    margin-left: 20px;
}
```
##### :bulb: Do not add a space between the property value and the unit (such as `margin-left:20 px;`). The correct way is: `margin-left:20px;`

<hr />

## Internal Style Sheet

An internal style sheet may be used if one single page has a unique style.

Internal styles are defined within the `<style>` element, inside the `<head>` section of an HTML page:

[Try it Yourself][Internal CSS]

<hr />

## Inline Styles

An inline style may be used to apply a unique style for a single element.

To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property.

The example below shows how to change the color and the left margin of a `<h1>` element:

[Try it Yourself][Inline CSS]


##### :bulb: An inline style loses many of the advantages of a style sheet (by mixing content with presentation). Use this method sparingly!


<hr />

## Multiple Style Sheets

If some properties have been defined for the same selector (element) in different style sheets, the value from the last read style sheet will be used. 

### Example
Assume that an external style sheet has the following style for the `<h1>` element:

```CSS
h1 {
    color: navy;
}
```
then, assume that an internal style sheet also has the following style for the `<h1>` element:
```CSS
h1 {
    color: orange;    
}
```
If the internal style is defined after the link to the external style sheet, the `<h1>` elements will be "orange":

[Try it Yourself][Multiple CSS]

However, if the internal style is defined before the link to the external style sheet, the `<h1>` elements will be "navy":

[Try it Yourself][Multiple CSS 2]

<hr />

## Cascading Order

What style will be used when there is more than one style specified for an HTML element?

Generally speaking we can say that all the styles will "cascade" into a new "virtual" style sheet by the following rules, where number one has the highest priority:

	1. Inline style (inside an HTML element)
	1. External and internal style sheets (in the head section)
	1. Browser default
So, an inline style (inside a specific HTML element) has the highest priority, which means that it will override a style defined inside the <head> tag, or in an external style sheet, or a browser default value.

[Try it Yourself][CSS Priority]

#### [:arrow_backward: Previous](./CSS-Syntax.md) | [Next Chapter :arrow_forward:](./CSS-Backgrounds.md)


[Add CSS link To HTML]: http://jsbin.com/yefovu/embed?html,output
[Internal CSS]: http://jsbin.com/nihura/embed?html,output
[Inline CSS]: http://jsbin.com/ceqeza/embed?html,output
[Multiple CSS]: http://jsbin.com/fejiro/embed?html,output
[Multiple CSS 2]: http://jsbin.com/pezabu/embed?html,output
[CSS Priority]: http://jsbin.com/domamaf/embed?html,output
