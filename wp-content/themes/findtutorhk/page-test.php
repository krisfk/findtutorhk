<?php

get_header();

?>

<?php
echo do_shortcode('[contact-form-7 id="64" title="student register"]');
?>



<script type="text/javascript">
var $ = jQuery;

$(function() {
    var foundin = $('#location option:contains("optgroup-")');
    $.each(foundin, function(value) {
        var updated = $(this).val().replace('optgroup-', '');
        $(this).nextUntil('option:contains("endoptgroup")').wrapAll('<optgroup label="' + updated +
            '"></optgroup>');
    });
    $('#location option:contains("optgroup-")').remove();
    $('#location option:contains("endoptgroup")').remove();
});
</script>
</body>



</html>