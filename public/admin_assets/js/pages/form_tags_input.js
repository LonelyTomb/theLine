/* ------------------------------------------------------------------------------
*
*  # Tag inputs
*
*  Specific JS code additions for form_tag_inputs.html page
*
*  Version: 1.2
*  Latest update: Aug 10, 2016
*
* ---------------------------------------------------------------------------- */

$(function() {
  // ========================================
    //
    // Tags input
    //
    // ========================================


    // Display values
    $('.tags-input, [data-role="tagsinput"], .tagsinput-max-tags, .tagsinput-custom-tag-class').on('change', function(event) {
        var $element = $(event.target),
            $container = $element.parent().parent('.content-group');

        if (!$element.data('tagsinput'))
        return;

        var val = $element.val();
        if (val === null)
        val = "null";
    
        $('pre.val > code', $container).html( ($.isArray(val) ? JSON.stringify(val) : "\"" + val.replace('"', '\\"') + "\"") );
        $('pre.items > code', $container).html(JSON.stringify($element.tagsinput('items')));
        Prism.highlightAll();
    }).trigger('change');



    // Basic examples
    // ------------------------------

    // Basic initialization
    $('.tags-input').tagsinput();


    // Allow dublicates
    $('.tags-input-dublicates').tagsinput({
        allowDuplicates: true
    });


    // Set maximum allowed tags
    $('.tagsinput-max-tags').tagsinput({
        maxTags: 5
    });


    // Custom tag class
    $('.tagsinput-custom-tag-class').tagsinput({
        tagClass: function(item){
            return 'label bg-success';
        }
    });


    //
    // Typeahead implementation
    //

    // Matcher
    var substringMatcher = function(strs) {
        return function findMatches(q, cb) {
            var matches, substringRegex;

            // an array that will be populated with substring matches
            matches = [];

            // regex used to determine if a string contains the substring `q`
            substrRegex = new RegExp(q, 'i');

            // iterate through the pool of strings and for any string that
            // contains the substring `q`, add it to the `matches` array
            $.each(strs, function(i, str) {
                if (substrRegex.test(str)) {

                    // the typeahead jQuery plugin expects suggestions to a
                    // JavaScript object, refer to typeahead docs for more info
                    matches.push({ value: str });
                }
            });
            cb(matches);
        };
    };
    // "Remove all" method
    $('.remove-all-tags-button').on('click', function() {
        $('.tagsinput-remove-tags').tagsinput('removeAll');
        $(this).addClass('disabled');
    });

    // "Destroy" method
    $('.destroy-tagsinput-button').on('click', function() {
        $('.tagsinput-destroy').tagsinput('destroy');
        $(this).addClass('disabled');
    });

});
