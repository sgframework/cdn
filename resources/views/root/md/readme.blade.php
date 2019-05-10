@extends('layouts.root')
@section('content')

<link href="{{ asset('css/assets/css/github-markdown.css') }}" rel="stylesheet">

<article class="markdown-body">
	<h1>Unicorns</h1>
	<p>All the things</p>

<p><a href="http://cdn.ies.com/root/readme-v0.02" target="_blank">http://cdn.ies.com/root/readme-v0.02</a></p>
<p><a href="SampleMarkdown.html"></a>
<img src="https://github.com/RickStrahl/MarkdownMonster/raw/master/Art/MarkdownMonster_Icon_128.png" align="right" style="height: 64px"/></p>
<h1 id="welcome-to-markdown-monster">Welcome to Markdown Monster</h1>
<p>Here are a few tips to get you started:</p>
<ul>
<li><p>To create a <strong>New Document</strong> press <strong>Ctrl-N</strong> or <strong>click <i class="fa fa-plus-circle"></i> </strong> on the toolbar</p>
</li>
<li><p>To toggle the <strong>HTML Preview</strong> press <strong>F12</strong> or click <i class="fa fa-globe"></i>  in the Window
bar</p>
</li>
</ul>
<pre><code class="language-markdown">@icn-camera
</code></pre>

<pre><code class="language-json">@icn-camera
</code></pre>

<i class="fa fa-gear fa-spin fa-2x" style="color: firebrick"></i>
<i class="fa fa-refresh fa-spin fa-2x"></i>
<p>👍</p>

<i class="em em-face_with_raised_eyebrow"></i>





                    
                    @emojione(':smile:')

@markdown

                
@emojione(':smiley:')

@endmarkdown

<div class="highlight nt">highlight</div>

<ul>
<li><p>To open the <strong>Folder Browser</strong> press <strong>Ctrl-Shift-B</strong> or click <strong><i class="fa fa-bars"></i> </strong></p>
</li>
<li><p>The <strong><i class="fa fa-bars"></i>  SideBar</strong> also holds <strong>Favorites</strong> and <strong>Markdown Document Outline</strong></p>
</li>
<li><p>To change <strong>UI Themes</strong>, click on the dropdown lists on the bottom right status bar:</p>
</li>
</ul>
<p><img src="https://markdownmonster.west-wind.com/docs/images/EditorPreviewThemeUi.png" alt="Image and Preview Themes on the toolbar" /></p>
<ul>
<li><p>For <strong>light editor themes</strong> look at <code>visualstudio</code>, <code>github</code> or <code>xcode</code></p>
</li>
<li><p>For <strong>dark editor themes</strong> look at <code>vscodedark</code>, <code>twilight</code>, <code>monokai</code>, <code>terminal</code></p>
</li>
</ul>
<h3 id="problems-please-let-us-know">Problems? Please let us know</h3>
<p>If you run into any problems or issues, <strong>please</strong> let us know so we can address and fix them right away. You can report issues on GitHub:</p>
<ul>
<li><a href="https://github.com/RickStrahl/MarkdownMonster/issues">Markdown Monster Bug Reports and Feature Requests</a></li>
</ul>
<h1 id="markdown-features">Markdown Features</h1>
<p>This topic is meant to give you a very basic overview of how Markdown works, showing some of the most frequently used operations.</p>
<h3 id="bold-and-italic">Bold and Italic</h3>
<p>This text <strong>is bold</strong>.<br />
This text <em>is italic</em>.<br />
This text <del>is struck out</del>.</p>
<h3 id="header-text">Header Text</h3>
<h1 id="header-1">Header 1</h1>
<h2 id="header-2">Header 2</h2>
<h3 id="header-3">Header 3</h3>
<h4 id="header-4">Header 4</h4>
<h5 id="header-5">Header 5</h5>
<h6 id="header-6">Header 6</h6>
<h3 id="line-continuation">Line Continuation</h3>
<p>By default Markdown <strong>adds paragraphs at double line breaks</strong>. Single line breaks by themselves are simply wrapped together into a single line. If you want to have <strong>soft returns</strong> that break a single line, add <strong>two spaces at the end of the line</strong>.</p>
<hr />
<p>This line has a paragraph break at the end (empty line after).</p>
<p>Theses two lines should display as a single
line because there's no double space at the end.</p>
<p>The following line has a soft break at the end (two spaces or a <code>\</code> at end)<br />
This line should be following on the very next line.</p>
<p>You can use <strong>View → Show Invisible Characters</strong> to show all white space and returns.</p>
<hr />
<h3 id="links">Links</h3>
<p>You can easily link using <code>[text](link)</code> sytnax:</p>
<p><a href="http://MarkdownMonster.west-wind.com/">Markdown Monster Web Site</a></p>
<p>If you need additional image tags like targets or title attributes you can also embed HTML directly using raw HTML markup:</p>
<pre><code class="language-htm">Go to the 
&lt;a href=&quot;https://markdownmonster.west-wind.com&quot; style=&quot;font-style: italic&quot;&gt;
    Markdown Monster Web Site
&lt;/a&gt;
</code></pre>
<p>renders:</p>
<p>Go to the
<a href="https://markdownmonster.west-wind.com" style="font-style: italic">
Markdown Monster Web Site
</a></p>
<hr />
<h3 id="images">Images</h3>
<p>Images are similar to links:</p>
<pre><code class="language-markdown">![Markdown Monster](https://markdownmonster.west-wind.com/Images/MarkdownMonster_Icon_128.png)
</code></pre>
<p>which renders:</p>
<p><img src="https://markdownmonster.west-wind.com/Images/MarkdownMonster_Icon_128.png" alt="Markdown Monster" /></p>
<p>You can embed images by pasting from the Clipboard (<strong>ctrl-v</strong>), using the <i class="fa fa-image"></i>  Image Dialog, or by dragging and dropping into the document from the the Folder Browser, or Explorer.</p>
<h3 id="block-quotes">Block Quotes</h3>
<p>Block quotes are callouts that are great for adding notes or warnings into documentation.</p>
<pre><code class="language-markdown">&gt; ### @ icon-info-circle Headers break on their own
&gt; Note that headers don't need line continuation characters as they are block elements and automatically break. Only text lines require the double spaces for single line breaks.
</code></pre>
<blockquote>
<h3 id="icon-info-circle-headers-break-on-their-own"><i class="fa fa-info-circle"></i>  Headers break on their own</h3>
<p>Note that headers don't need line continuation characters as they are block elements and automatically break. Only text lines require the double spaces for single line breaks.</p>
</blockquote>
<p>You can also use simple block quotes:</p>
<pre><code class="language-markdown">&gt; **Note:** Block quotes can be used to highlight important ideas.
</code></pre>
<blockquote>
<p><strong>Note:</strong> Block quotes can be used to highlight important ideas.</p>
</blockquote>
<h3 id="fontawesome-icons">Fontawesome Icons</h3>
<p>Help Builder includes a custom syntax for FontAwesome icons in its templates. You can embed a <code>@ icon-</code> followed by a font-awesome icon name to automatically embed that icon without full HTML syntax.</p>
<pre><code class="language-markdown">@ icon-gear Configuration
</code></pre>
<h3 id="emojiis">Emojiis</h3>
<p>You can also embed Emojiis into your markdown using the Emoji dialog or common</p>
<pre><code class="language-markdown">:smile: :rage: :sweat: :point_down:

:-) :-( :-/ 
</code></pre>
<p>😄 😡 😓 👇</p>
<p>😃 😦 😕</p>
<h3 id="html-markup">HTML Markup</h3>
<p>You can also embed plain HTML markup into the page if you like. For example, if you want full control over fontawesome icons you can use this:</p>
<p>This text can be <strong>embedded</strong> into Markdown:</p>
<pre><code class="language-markdown">&lt;i class=&quot;fa fa-refresh fa-spin fa-2x&quot;&gt;&lt;/i&gt; &amp;nbsp;**Refresh Page**
</code></pre>
<p><i class="fa fa-refresh fa-spin fa-2x"></i>  <strong>Refresh Page</strong></p>
<p>Note that blocks of raw HTML markup should be separated from text by empty lines above and below the HTML blocks.</p>
<h3 id="unordered-lists">Unordered Lists</h3>
<pre><code class="language-markdown">* Item 1
* Item 2
* Item 3  
</code></pre>
<ul>
<li>Item 1</li>
<li>Item 2</li>
<li>Item 3</li>
</ul>
<p>This text is part of the third item. Use two spaces at end of the the list item to break the line.</p>
<p>A double line break, breaks out of the list.</p>
<h3 id="ordered-lists">Ordered Lists</h3>
<p>If you want lines to break using soft returns use two
spaces at the end of a line.</p>


<pre><code class="language-sql">1. **Item 1**  
Item 1 is really something
2. **Item 2**  
Item two is really something else
</code></pre>
<ol>
<li><strong>Item 1</strong><br />
Item 1 is really something</li>
<li><strong>Item 2</strong><br />
Item two is really something else</li>
</ol>
<p>If you want to lines to break using soft returns use to spaces at the end of a line.</p>
<blockquote>
<p><strong>Note</strong>: Numbered lists order themselves base on order rather than the number you use. All numbers can be the same and the list will order itself.</p>
</blockquote>
<p>Now a nested list:</p>
<pre><code class="language-php">1. First, get these ingredients:

      * carrots
      * celery
      * lentils

2. Boil some water.

3. Dump everything in the pot and follow  
this algorithm:
</code></pre>
<ol>
<li><p>First, get these ingredients:</p>
<ul>
<li>carrots</li>
<li>celery</li>
<li>lentils</li>
</ul>
</li>
<li><p>Boil some water.</p>
</li>
<li><p>Dump everything in the pot and follow<br />
this algorithm:</p>
</li>
</ol>
<h3 id="inline-code">Inline Code</h3>
<p>If you want to embed code in the middle of a paragraph of text to highlight a coding syntax or class/member name you can use inline code syntax:</p>
<pre><code class="language-markdown">Inline code or member references  like `SomeMethod()` can be codified...
</code></pre>
<hr />
<p>Inline code or member references  like <code>SomeMethod()</code> can be codified... You can use the <code>'{}'</code>** menu or <strong>Ctrl-`</strong> to embed inline code.</p>
<hr />
<h3 id="indented-code-blocks">Indented Code Blocks</h3>
<p>Markdown supports code blocks syntax in a couple of ways:</p>
<p>Using and indented text block for code:</p>
<pre><code class="language-markdown">Some rendered text...

    // This is code by way of four leading spaces
    // or a leading tab
    int x = 0;
    string text = null;
    for(int i; i &lt; 10; i++;) {
        text += text + &quot;Line &quot; + i;
    }

More text here
</code></pre>
<p>renders:</p>
<p>Some rendered text...</p>
<pre><code>// This is code by way of four leading spaces
// or a leading tab
int x = 0;
string text = null;
for(int i; i &lt; 10; i++;) {
    text += text + &quot;Line &quot; + i;
}
</code></pre>
<p>More text here</p>
<h3 id="fenced-code-blocks-with-syntax-highlighting">Fenced Code Blocks with Syntax Highlighting</h3>
<p>You can also use triple back ticks plus an optional coding language to support for syntax highlighting.</p>
<p>The following is C# code.</p>
<pre><code class="language-markdown">```csharp
// this code will be syntax highlighted
for(var i=0; i++; i &lt; 10)
{
    Console.WriteLine(i);
}
```  
</code></pre>
<p>which renders syntax colored code:</p>
<pre><code class="language-csharp">// this code will be syntax highlighted
for(var i=0; i++; i &lt; 10)
{
    Console.WriteLine(i);
}
</code></pre>
<p>Many languages are supported: html, xml, javascript, typescript, css, csharp, fsharp foxpro, vbnet, sql, python, ruby, php, powershell, dos, markdown, yaml and many more. Use the Code drop down list to get a list of available languages.</p>
<p>You can also leave out the language to attempt auto-detection or use <code>text</code> for plain text:</p>
<pre><code class="language-markdown">```text
robocopy c:\temp\test d:\temp\test
```
</code></pre>
<p>renders plain, but formatted text:</p>
<pre><code class="language-text">robocopy c:\temp\test d:\temp\test
</code></pre>
<blockquote>
<p><strong>Note</strong>: Prefer using <code>text</code> for non-highlighted syntax over no syntax as no syntax tries to auto-discover the syntax which often is not correct. Always be specific with syntax specified.</p>
</blockquote>
<h3 id="footnotes">Footnotes</h3>
<p>Footnotes can be embedded like this:</p>
<p>Here is some text that includes a Footnote <a id="fnref:1" href="#fn:1" class="footnote-ref"><sup>1</sup></a> in the middle of its text. And here's another footnote <a id="fnref:2" href="#fn:2" class="footnote-ref"><sup>2</sup></a>. The actual footnotes render on the very bottom of the page.</p>
<h3 id="pipe-tables">Pipe Tables</h3>
<p><a href="https://github.com/lunet-io/markdig/blob/master/src/Markdig.Tests/Specs/PipeTableSpecs.md">Pipe Tables</a> can be used to create simple single line tables:</p>
<pre><code class="language-markdown">|size | material     | color       |
|---- | ------------ | ------------|
|9    | leather      | brown **fox**  |
|10   | hemp canvas  | natural |
|11   | glass        | transparent |
</code></pre>
<hr />
<table>
<thead>
<tr>
<th>size</th>
<th>material</th>
<th>color</th>
</tr>
</thead>
<tbody>
<tr>
<td>9</td>
<td>leather</td>
<td>brown <strong>fox</strong></td>
</tr>
<tr>
<td>10</td>
<td>hemp canvas</td>
<td>natural</td>
</tr>
<tr>
<td>11</td>
<td>glass</td>
<td>transparent</td>
</tr>
</tbody>
</table>
<blockquote>
<p><strong>Note:</strong> Cell lines don't have to line up to render properly. Max columns in any row determines table columns for the entire table. Pipe tables also don't need leading and trailing pipes to render as tables, but make sure you check compatibility with your final rendering site.</p>
</blockquote>
<h3 id="grid-tables">Grid Tables</h3>
<p><a href="https://github.com/lunet-io/markdig/blob/master/src/Markdig.Tests/Specs/GridTableSpecs.md">Grid Tables</a> are a bit more flexible than Pipe Tables in that they can have multiple lines of text per cell and handle multi-line embedded Markdown text.</p>
<pre><code class="language-markdown">+---------+---------+
| Header  | Header  |
| Column1 | Column2 |
+=========+=========+
| 1. ab   | &gt; This is a quote
| 2. cde  | &gt; For the second column 
| 3. f    |
+---------+---------+
| Second row spanning
| on two columns
+---------+---------+
| Back    |         |
| to      |         |
| one     |         |
| column  |         | 
</code></pre>
<hr />
<table>
<col style="width:50%">
<col style="width:50%">
<thead>
<tr>
<th>Header
Column1</th>
<th>Header
Column2</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<ol>
<li>ab</li>
<li>cde</li>
<li>f</li>
</ol>
</td>
<td>
<blockquote>
<p>This is a quote
For the second column</p>
</blockquote>
</td>
</tr>
<tr>
<td colspan="2">Second row spanning
on two columns</td>
</tr>
<tr>
<td>Back
to
one
column</td>
<td></td>
</tr>
</tbody>
</table>
<blockquote>
<h3 id="icon-info-circle-use-the-icon-table-table-editor"><i class="fa fa-info-circle"></i>  Use the <i class="fa fa-table"></i>  Table Editor</h3>
<p>For easier table data entry and pretty rendered tables you can use the table editor which provides grid based table data entry. You can use the table editor with <strong>Pipe</strong>, <strong>Grid</strong> and <strong>HTML</strong> tables.</p>
</blockquote>
<div class="footnotes">
<hr />
<ol>
<li id="fn:1">
<p>Source: <a href="http://markdownmonster.west-wind.com">Markdown Monster Web Site</a><a href="#fnref:1" class="footnote-back-ref">&#8617;</a></p>
</li>
<li id="fn:2">
<p>Source: <a href="http://markdownmonster.west-wind.com">Markdown Monster Web Site</a><a href="#fnref:2" class="footnote-back-ref">&#8617;</a></p>
</li>
</ol>
</div>
</article>





<script type="text/javascript" src="{{ asset('js/jush.js') }}"></script>
<script type="text/javascript">
jush.style('<?php asset("css/jush.css"); ?>');
jush.highlight_tag('code');
</script>

@endsection