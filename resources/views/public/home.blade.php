@extends('public/layout')

@section('content')
    <div class="main-container">
        <header class="page-header">
            <div class="background-image-holder parallax-background">
                <img class="background-image" alt="Background Image" src="img/hero14.jpg">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <img alt="logo" class="logo" src="img/logo-light.png">
                        <h1 class="text-white space-bottom-medium">Touchez de nouveaux consommateurs<br>et bénéficiez de statistiques précieuses</h1>
                        <a class="btn btn-primary btn-white join-link">rejoindre</a>
                        <a href="{{ URL::route('login') }}" class="btn btn-primary btn-filled">connexion</a>
                    </div>
                </div>
            </div>
        </header>
        <section class="pure-text-centered">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <span class="sub alt-font">facile, rapide &amp; gratuit</span>
                        <h1><strong>Participer à la révolution du vin</strong></h1>
                        <p class="lead"><span>Wino est une application mobile destinée à conseiller les consommateurs lors de leurs achats de vin. Elle permet de trouver le vin qui convient parfaitement à la situation et au profil de l'utilisateur. Mais ce vin sera-t-il le vôtre ? Rejoignez notre aventure et ajoutez vos vins dans notre catalogue afin de profiter de cette nouvelle exposition ! Comment faire ? Encodez simplement vos vins avec vos tarifs dans notre espace caviste.</span></p>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="product-right">
            <div class="background-image-holder">
                <img class="background-image" alt="Background Image" src="img/grey-bg.jpg">
            </div>
            <div class="container align-vertical">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <h1>Un tableau de bord simple.</h1>
                        <p class="lead">
                            Nous avons simplifié un maximum votre espace caviste pour qu'il n'y ait que l'essentiel. Vous pouvez ainsi encoder un nouveau vin en 20 secondes chrono, c'est promis !</p>
                        <a href="{{ URL::route('login', ['test@test.fr', '0000']) }}" class="btn btn-primary">découvrir la démo</a>
                        <a href="{{ URL::route('login') }}" class="btn btn-primary btn-filled">connexion</a>
                    </div>
                </div>
            </div>
            <div class="product-image" data-scroll-reveal="enter right and move 100px">
                <img alt="Product Image" src="img/ipad.png">
            </div>
        </section>
        <section class="pure-text-centered">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
                        <span class="sub alt-font">facile, rapide &amp; gratuit</span>
                        <h1><strong>Participer à la révolution du vin</strong></h1>
                        <p class="lead"><span>Wino est une application mobile destinée à conseiller les consommateurs lors de leurs achats de vin. Elle permet de trouver le vin qui convient parfaitement à la situation et au profil de l'utilisateur. Mais ce vin sera-t-il le vôtre ? Rejoignez notre aventure et ajoutez vos vins dans notre catalogue afin de profiter de cette nouvelle exposition ! Comment faire ? Encodez simplement vos vins avec vos tarifs dans notre espace caviste.</span></p>
                    </div>
                </div>
            </div>
        </section>
        <header class="signup">
                <div class="background-image-holder parallax-background">
                    <img class="background-image" alt="Background Image" src="img/hero5.jpg">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
                            <h1 class="text-white">On n'attend plus que vous</h1>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-sm-12 text-center">
                            <div class="photo-form-wrapper clearfix">
                                <div class="row">
                                    <form class="join" method="post">
                                        <div class="col-md-3 col-sm-4">
                                            <input class="form-email" type="text" placeholder="Nom" name="name" required>
                                        </div>

                                        <div class="col-md-3 col-sm-4">
                                            <input class="form-text" type="email" placeholder="Adresse email" name="email" required>
                                        </div>

                                        <div class="col-md-3 col-sm-4">
                                            <input class="form-text" type="tel" placeholder="Téléphone" name="phone" required>
                                        </div>
                                        <div class="col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 text-center">
                                            <input type="submit" class="btn btn-primary btn-filled join-submit" value="Rejoindre le mouvement">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
        </header>
    </div>
@endsection
@section('javascript')
    <script>
        $(document).ready(function(){
            $('.join-link').click(function(){
                $('html, body').animate({
                    scrollTop:$('.signup').offset().top - 100
                },'slow');
            });

            $('.join').submit(function(e){
                e.preventDefault();
                var inputs = ['name', 'email', 'phone'];
                var data = [];
                for(var i in inputs){
                    data[inputs[i]] = $('input[name="' + inputs[i] + '"]').val();
                }
                $.ajax({
                    method: 'GET',
                    url: '{{ URL::route('join') }}',
                    data: {
                        name: data['name'],
                        email: data['email'],
                        phone: data['phone']
                    },
                    success: function(){
                        var $submit = $('.join-submit');
                        var text = $submit.val();
                        var background = $submit.css('backgroundColor');
                        $submit.val('Envoyé ! :)').css('backgroundColor', '#86B16C');
                        setTimeout(function(){
                            $submit.val(text).css('backgroundColor', background);
                            for(i in inputs){
                                $('input[name="' + inputs[i] + '"]').val('');
                            }
                        },5000);
                    },
                    error: function(){
                        alert('ERROR !');
                    }
                });
            });
        });
    </script>
@endsection
