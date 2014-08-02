<section id="v5">
    <h1 class="page-header">
        Migrating from 4.1 to 5
    </h1>

    <div class="alert alert-danger">
        <p>
            Migrating from 4.1 to version 5 might include an awful lot of work. Version 4.1 will be supported for the
            foreseeable future but will only contain patch fixes. </p>
    </div>

    <h2>
        Update the <code>app.php</code> aliases
    </h2>

    <p>
        First, you'll need to update your <code>app.php</code>. Remove all Bootstrapper aliases and replace them with
        the following:
    </p>
            <pre class="prettyprint linenums lang-php">
'Alert' => 'Bootstrapper\Facades\Alert',
'Badge' => 'Bootstrapper\Facades\Badge',
'Breadcrumb' => 'Bootstrapper\Facades\Breadcrumb',
'Button' => 'Bootstrapper\Facades\Button',
'ButtonGroup' => 'Bootstrapper\Facades\ButtonGroup',
'ButtonToolbar' => 'Bootstrapper\Facades\ButtonToolbar',
'Carousel' => 'Bootstrapper\Facades\Carousel',
'DropdownButton' => 'Bootstrapper\Facades\DropdownButton',
'Form' => 'Bootstrapper\Facades\Form',
'Helpers' => 'Bootstrapper\Facades\Helpers',
'Icon' => 'Bootstrapper\Facades\Icon',
'Image' => 'Bootstrapper\Facades\Image',
'Label' => 'Bootstrapper\Facades\Label',
'MediaObject' => 'Bootstrapper\Facades\MediaObject',
'Modal'          => 'Bootstrapper\Facades\\Modal',
'Navbar' => 'Bootstrapper\Facades\Navbar',
'Navigation' => 'Bootstrapper\Facades\Navigation',
'Paginator' => 'Bootstrapper\Facades\Paginator',
'Panel' => 'Bootstrapper\Facades\Panel',
'Progress' => 'Bootstrapper\Facades\Progress',
'Tabbable' => 'Bootstrapper\Facades\Tabbable',
'Table' => 'Bootstrapper\Facades\Table',
'Thumbnail' => 'Bootstrapper\Facades\Thumbnail',
'Typeahead' => 'Bootstrapper\Facades\Typeahead',
'Typography' => 'Bootstrapper\Facades\Typography',
</pre>

    <h2>
        Individual Component Changes
    </h2>

    Please see the components below for the full changelist. If something is not covered, please <a
        href="https://github.com/PatrickRose/bootstrapper-docs/issues"> open an issue</a>!

    <h3>
        Helpers
    </h3>

    <ul>
        <li>
            <code>Bootstrapper\Helpers::get_CSS()</code> should be replaced with <code>Helpers::css()</code>.
        <li>
            <code>Bootstrapper\Helpers::get_JS()</code> should be replaced with <code>Helpers::js()</code>.
        </li>
    </ul>

    <h3>
        Navbars
    </h3>

    <ul>
        <li>
            The <code>Navbar::create()</code> call now takes parameters in the opposite order (giving
            <code>Navbar::create($position, $attributes = [])</code>. Previous calls such as
            <code>Navbar::create(['role' => 'navigation'], Navbar::FIX_TOP)</code> should now be
            <code>Navbar::create(Navbar::FIX_TOP, ['role' => 'navigation'])</code>
        </li>
        <li>
            Similarly, <code>Navbar::inverse()</code> now has the signature <code>Navbar::inverse($position, $attributes)</code>
        </li>
        <li>
            <code>with_brand()</code> has been renamed <code>withBrand()</code>.
        </li>
        <li>
            <code>with_menus()</code> has been renamed <code>withContent()</code>.
        </li>
        <li>
            <code>withContent()</code> now expects either a <code>Navigation</code> object or a string. It can
            survive being given any other object, as long as it has a <code>__toString()</code> implementation.
        </li>
    </ul>

    <h3>
        Navigation
    </h3>

    <ul>
        <li>
            <code>Navigation::links()</code> has been removed. Use <code>pills()</code> or <code>tabs()</code>
        </li>
        <li>
            <code>pills()</code> and <code>tabs()</code> now only expect an array argument, instead of the return value
            of <code>Navigation::links</code>.
        </li>
        <li>
            There is no longer a boolean flag in <code>pills()</code> or <code>tabs()</code> method
            signatures to make the result stacked. Instead, use the chained method <code>stacked()</code>.
        </li>
        <li>
            The array arguments for <code>pills()</code> or <code>tabs()</code> must be explicit
            Instead of using <code>['Home', url('home')]</code>, you must use
            <code>['title' => 'Home', 'link' => url('home')</code>.
            {{ Label::info('Support for the older shorthand method may return, depending on requests. If you feel it
                important, please <a href="http://github.com/patricktalmadge/bootstrapper/issues">open an issue</a>.') }}
        </li>
    </ul>

    <script type="javascript">
        document.onload(function()
        {
            $('#tooltip').tooltip();
        });

    </script>

</section>