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
            let post = data.shift();
            console.log(post);
                title = post.title.rendered,
                content = post.content.rendered,
                quoteSource = post._qod_quote_source,
                sourceUrl= post._qod_quote_source_url,
                slug = post.slug;

            $('.entry-content').html(content);
            $('.entry-meta').html('<p> - ' + title + '<p>');
            $('.source').html('<span class="source"><a href="'+sourceUrl+'">'+quoteSource+'</a></span>');

            let url = 'http://localhost:3000/qod/' + post.slug;


            history.pushState(null, null, url)
            
            window.addEventListener('popstate', function(event) {
            let LastPage = document.URL;
            window.location.replace(LastPage);
            })

        });


     });

     $(window).on('popstate', function(){
         window.location.replace(lastPage);
     });

});

    $(function() {
        // Event on submit of the form
        $('#submit-quote').on('submit', function(event) {
            event.preventDefault(); 
            const data = {
                title: $('#author-quote').val(),
                content: $('#quote').val(),
                _qod_quote_source: $('#quote-source').val(),
                _qod_quote_source_url: $('#quote-source-url').val(),
                post_status: 'pending'
              }
            $.ajax({
                method: 'POST',
                url: api_vars.root_url + 'wp/v2/posts',
                data, 
                beforeSend: function(xhr) {
                    xhr.setRequestHeader( 'X-WP-Nonce', api_vars.nonce );
                }

            }).done(function(data, statusText, xhr) {
                $('#submit-quote')
                .slideUp()
                .val('');

                var status = xhr.status;

                //show success message using the var from functions.php
                if(status == 201){
                    $('section').text(api_vars.success)};
                
            


            }).fail(function() {
                // post and alert wih failure var from functions.php
                $('#submit-quote').text(api_vars.failure);
            })
        });
    });


})(jQuery);