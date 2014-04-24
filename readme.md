DPLA widget for Wordpress (dcplumer)

An embeddable widget to search the Digital Public Library of America collections.

It's written in pure JavaScript and CSS.  It has no external dependencies on libraries such as JQuery or Twitter Bootstrap.
Nor do you need a DPLA API key.

This is a modified version of the plugin developed by Josh Ferrell, available at https://github.com/lfarrell/DPLA-Search-Widget. Specific modifications: altered behavior to load results in a new window/tab. Increased input area width, removed background color from search button, and changed button text to gray to remove CSS conflicts.

Download the plugin from https://github.com/dcplumer/DPLA-Search-Widget-dcplumer.  Unzip the plugin and activate
it in your admin panel.

Then simply add the following to any Wordpress page/post:

```html
<div id="dpla_search_widget_dcplumer"></div>
```


The widget should look like this on your Wordpress page:

![modified DPLA widget](http://www.dcplumer.com/dpla/dpla-widget-dcplumer.png)
