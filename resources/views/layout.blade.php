<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Portal Aplikasi - Sistem Informasi Asisten</title>
    <!--CSS Files-->

    
    <link rel="stylesheet" href="/css/reset.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/grid.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/typography.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/forms.css" type="text/css" media="screen, projection">
    <link rel="stylesheet" href="/css/print.css" type="text/css" media="print">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="icon" href="/images/siasisten.ico" type="image/png">
    <!-- jQuery !-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"> </script>
    <!-- jQuery UI !-->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>


    

<script type="text/javascript">
jQuery(function($) {
function getCookie(name) {
    var cookieValue = null;
    if (document.cookie && document.cookie != '') {
        var cookies = document.cookie.split(';');
        for (var i = 0; i < cookies.length; i++) {
            var cookie = jQuery.trim(cookies[i]);
            // Does this cookie string begin with the name we want?
            if (cookie.substring(0, name.length + 1) == (name + '=')) {
                cookieValue = decodeURIComponent(cookie.substring(name.length + 1));
                break;
            }
        }
    }
    return cookieValue;
}
function csrfSafeMethod(method) {
    // these HTTP methods do not require CSRF protection
    return (/^(GET|HEAD|OPTIONS|TRACE)$/.test(method));
}
function sameOrigin(url) {
    // test that a given url is a same-origin URL
    // url could be relative or scheme relative or absolute
    var host = document.location.host; // host + port
    var protocol = document.location.protocol;
    var sr_origin = '//' + host;
    var origin = protocol + sr_origin;
    // Allow absolute or scheme relative URLs to same origin
    return (url == origin || url.slice(0, origin.length + 1) == origin + '/') ||
        (url == sr_origin || url.slice(0, sr_origin.length + 1) == sr_origin + '/') ||
        // or any other URL that isn't scheme relative or absolute i.e relative.
        !(/^(\/\/|http:|https:).*/.test(url));
}
$.ajaxSetup({
    beforeSend: function(xhr, settings) {
        if (!csrfSafeMethod(settings.type) && sameOrigin(settings.url)) {
            // Send the token to same-origin, relative URLs only.
            // Send the token only if the method warrants CSRF protection
            // Using the CSRFToken value acquired earlier
            xhr.setRequestHeader("X-CSRFToken", getCookie('csrftoken'));
        }
    }
});
});
</script>


<script type="text/javascript" src="/autocomplete_light/autocomplete.js"></script>
<script type="text/javascript" src="/autocomplete_light/widget.js"></script>
<script type="text/javascript" src="/autocomplete_light/addanother.js"></script>
<script type="text/javascript" src="/autocomplete_light/text_widget.js"></script>
<script type="text/javascript" src="/autocomplete_light/remote.js"></script>
<link rel="stylesheet" type="text/css" href="/autocomplete_light/style.css" />

</head>
<body>
    <div class="container">
     @yield("container")
    </div> <!-- end of container -->
                <hr>
                <div id="footer" class="prepend-top push-3 span-24 last">
                    <p>versi alpha</p>
                    <p class="prepend-6">"Hubungi admin melalui email ke siasisten at nurulfikri.ui.ac.id untuk melakukan approval atau bila ada pertanyaan tentang Sistem Informasi Asisten."</p>
                    <p class="prepend-10">   
                    <!-- <img src="images/makara_csui.gif">
                    <img src="images/excellence.gif"> -->
                    </p>
                </div>             
            </div>
        </div>
    </div>
</body>
</html>	
]