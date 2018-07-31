<input />
<br/> <br/>
<textarea id="example" style="min-width: 600px;min-height: 300px;;"></textarea>

<!-- Include the default theme -->
<link rel="stylesheet" href="../../sceditor/themes/default.css" />

<!-- Include the editors JS -->
<script src="../../sceditor/sceditor.js"></script>
<script src="../../sceditor/formats/bbcode.js"></script>
<script>
// Replace the textarea #example with SCEditor
    var textarea = document.getElementById('example');
    sceditor.create(textarea, {
        format: 'bbcode',
        style: 'minified/themes/content/default.min.css'
    });
</script>

<input type="submit"/>