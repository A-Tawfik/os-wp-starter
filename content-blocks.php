<h1>H1. Fusce sed molestie eros cras non justo nunc.</h1>

<h2>H2. Nulla eleifend tortor vitae lorem accumsan</h2>

<h3>H3. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum.</h3>

<h4>H4. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum.</h4>

<h5>H5. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum.</h5>

<h6>H6. Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum.</h6>

<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <a href="#">Morbi justo lorem</a>, congue eu ipsum eu, feugiat ornare ex. Nulla eleifend tortor vitae lorem accumsan, ac pellentesque elit pretium. Mauris ac ipsum eros. Suspendisse dolor mi, viverra sit amet diam in, convallis tempus ex. Ut cursus mi vel lacus facilisis suscipit. Curabitur facilisis turpis in augue finibus, eu congue magna condimentum.</p>

<blockquote>
    Blockquote, massa ut fermentum maximus, nisl libero eleifend odio, ornare consectetur massa velit vel tellus.
    <cite>Firstname Lastname<br><span class="os-u-faded">title/position</span></cite>
</blockquote>

<p>Aenean at volutpat urna, quis mattis augue. Maecenas tincidunt sollicitudin bibendum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Curabitur et interdum sem, et convallis lacus. Fusce efficitur, massa ut fermentum maximus, nisl libero eleifend odio, ornare consectetur massa velit vel tellus. Morbi rhoncus arcu at orci blandit, non dapibus est vestibulum. Fusce in vestibulum metus. Sed gravida eu mi non pharetra. Suspendisse egestas nibh imperdiet augue iaculis posuere. Donec bibendum diam rhoncus, porta nulla nec, facilisis est. Donec in erat nec odio venenatis faucibus et ac nunc.</p>

<hr/>

<h3>Unordered Lists</h3>

<ul>
    <li>This is a list item in an unordered list</li>
    <li>An unordered list is a list in which the sequence of items is not important. Sometimes, an unordered list is a bulleted list. And this is a long list item in an unordered list that can wrap onto a new line. </li>
    <li>
        Lists can be nested inside of each other
        <ul>
            <li>
                This is a nested list item
                <ul>
                    <li>This is a nested list item</li>
                    <li>This is another nested list item in an unordered list</li>
                </ul>
            </li>
            <li>This is another nested list item in an unordered list</li>
        </ul>
    </li>
    <li>This is the last list item</li>
</ul>

<h3>Ordered Lists</h3>

<ol>
    <li>This is a list item in an ordered list</li>
    <li>An ordered list is a list in which the sequence of items is important. An ordered list does not necessarily contain sequence characters.</li>
    <li>
        Lists can be nested inside of each other
        <ol>
            <li>
                This is a nested list item
                <ol>
                    <li>This is a nested list item</li>
                    <li>This is another nested list item in an ordered list</li>
                </ol>
            </li>
            <li>This is another nested list item in an ordered list</li>
        </ol>
    </li>
    <li>This is the last list item</li>
</ol>

<hr/>

<h3>Preformatted & code</h3>

<pre>
.example {
display: block;
margin: 1em;
float: left;
}</pre>

<hr/>

<h3>Forms</h3>

<form>
    <p>
    <label class="os-b-label" for="text">Text Input <abbr title="Required">*</abbr></label>
    <input id="text" type="text" class="os-b-input" placeholder="Text Input">
    </p>
    <p>
    <label class="os-b-label" for="password">Password</label>
    <input id="password" type="password" class="os-b-input" placeholder="Type your Password">
    </p>
    <p>
    <label class="os-b-label" for="webaddress">Web Address</label>
    <input id="webaddress" type="url" class="os-b-input" placeholder="http://yoursite.com">
    </p>
    <p>
    <label class="os-b-label" for="emailaddress">Email Address</label>
    <input id="emailaddress" type="email" class="os-b-input" placeholder="name@email.com">
    </p>
    <p>
    <label class="os-b-label" for="search">Search</label>
    <input id="search" type="search" class="os-b-input" placeholder="Enter Search Term">
    </p>
    <p>
    <label class="os-b-label" for="number">Number Input <abbr title="Required">*</abbr></label>
    <input id="number" type="number" class="os-b-input" placeholder="Enter a Number" pattern="[0-9]*">
    </p>
    <p>
    <label class="os-b-label" for="textarea">Textarea</label>
    <textarea id="textarea" class="os-b-input" rows="8" cols="48" placeholder="Enter your message here"></textarea>
    </p>

    <div class="os-l-row">
        <div class="os-l-column">
            <p><input id="submit" value="Standard Button" type="button" class="os-b-btn"/></p>
            <p style="background:black; padding: 1em;"><input id="reset" value="Inverse Button" type="button" class="os-b-btn os-is-inverse"/></p>
            <p><input id="button" value="Small Button" type="button" class="os-b-btn os-is-small"/></p>
            <p><input id="disabled" value="Disabled Button" type="button" class="os-b-btn os-is-disabled" disabled/></p>
            <p>
                <button class="os-b-btn--circular">&larr;</button>
                <button class="os-b-btn--circular">&rarr;</button>
            </p>
        </div>
        <div class="os-l-column">
            <p><input id="submit" value="Solid Button" type="button" class="os-b-btn os-is-solid"/></p>
            <p style="background:black; padding: 1em;"><input id="reset" value="Solid & Inverse" type="button" class="os-b-btn os-is-inverse os-is-solid"/></p>
            <p><input id="button" value="Small & Solid" type="button" class="os-b-btn os-is-small os-is-solid"/></p>
            <p><input id="disabled" value="Disabled & Solid" type="button" class="os-b-btn os-is-solid os-is-disabled" disabled/></p>
        </div>
    </div>

</form>

<hr/>

<h3>Tables</h3>

<h4>Default</h4>

<pre><code>&lt;table class="os-b-table"&gt;</code></pre>

<table class="os-b-table">
    <thead>
        <tr>
            <th>Table Heading 1</th>
            <th>Table Heading 2</th>
            <th>Table Heading 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Table Footer 1</th>
            <th>Table Footer 2</th>
            <th>Table Footer 3</th>
        </tr>
    </tfoot>
</table>

<h4>Striped & Hoverable</h4>

<pre><code>&lt;table class="os-b-table--striped os-is-hoverable"&gt;</code></pre>

<table class="os-b-table--striped os-is-hoverable">
    <thead>
        <tr>
            <th>Table Heading 1</th>
            <th>Table Heading 2</th>
            <th>Table Heading 3</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
        <tr>
            <td>Table Cell 1</td>
            <td>Table Cell 2</td>
            <td>Table Cell 3</td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <th>Table Footer 1</th>
            <th>Table Footer 2</th>
            <th>Table Footer 3</th>
        </tr>
    </tfoot>
</table>