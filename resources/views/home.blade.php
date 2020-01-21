@extends('layout')
@section('container')
        <div id="header" class="span-24 last">            
            <div id="logo" class="span-2">
                <img style="width: 250%;margin-left:4%;" src="images/logo-fasilkom-baru.png">
            </div>
            <div id="title" style="padding-left: 20%; padding-top: 2.8%;" class="span-22 last">
                <h1 style="font-size: 300%;" class="title">Sistem Informasi Asisten</h1>
            </div> 
        </div>

        <div id="login-info" class="span-24 last">
            <h5>
                
                    <a href="/login/">Login</a>
                                
            </h5>
        </div><!-- end of login-info -->

        <div id="content" class="span-24 last">            
            <div id="content" class="span-24 last">
                

                <div id="main-content" class="prepend-1 span-19 last">
                    

<div id="login-area" class="prepend-6 append-7">
    <div id="login-box">
        <div id="login-box-header" style="padding-left: 0px;background-color: #000080;">
            <h2><center>LOGIN<center></h2>
        </div>
        <div class="form">
        <form class="form" action="/login/" method="post">
            <input type='hidden' name='csrfmiddlewaretoken' value='rj1CqlVjoXsEBndPGDohaX6Kj532et3p' />
            <label><label for="id_username">Username:</label></label><br/>
            <input class="title" id="id_username" maxlength="254" name="username" type="text" /><br>
            <label><label for="id_password">Password:</label></label><br/>
            <input class="title" id="id_password" name="password" type="password" /><br/><br/>
            <input type="submit" class="submit" value="login" />
            <input type="hidden" name="next" value="" />
        </form>        
        </div>
        
    </div>    
</div>
@endsection               