(function($){


    $(function(){
        //fetch a new quote 
$('#newQuoteButton').on('click', function(event) {
    event.preventDefault(); 

      $.ajax({
        method: 'GET',
        url: api_vars.root_url + 'wp/v2/posts?filter[orderby]=rand&filter[posts_per_page]=1',
        cache: false
     }).done( function(data) {
        const post = data.shift();
        console.log(post);
        // const postsource = $('source')
            title = post.title.rendered,
            content = post.content.rendered,
            quoteSource = post._qod_quote_source,
            sourceUrl= post._qod_quote_source_url,
            slug = post.slug;

        $('.entry-content').html(content);
        $('.entry-meta').html('<h2>' + title + '</h2>');
        $('.source').html('<span class="source"><a href="'+sourceUrl+'">'+quoteSource+'</a></span>');

        });


         //display quote source if unavailable 

         //upsate the url usinng history
     });


     //make the back and forward nav work with the history API 


    });

    $(function() {
        // Event on submit of the form
        const data = {
            title: $('#title-quote').val(),
            content: $('#quote-content').val(),
            _qod_quote_source: $('#quote-source').val(),
            _qod_quote_source_url: $('#quote-source-url').val(),
            post_status: 'pending'
          };
        $('form').on('submit', function() {
            $ajax({
                method: 'POST',
                url: api_vars.root_url + 'wp/v2/posts',
                data,
                beforeSend: function(xhr) {
                    xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
                }

            }).done(function() {
                // clear the form fields and hide the form
                //Use jquey so hide the form in a slidey way

                //show success message using the var from functions.php


            }).fail(function() {
                // post and alert wih failure var from functions.php
            })
        });
    });


})(jQuery);