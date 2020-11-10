

<style>
    @import url('https://fonts.googleapis.com/css2?family=Varela+Round&display=swap');

    * {
        font-family: 'Varela Round', sans-serif;
    }

    .fundoBtns {
        background-color: #a0aec0;
        height: 100vh;
        width: 100vw;
        display: flex;
        margin: 0px;
        color: white;
    }

    .btnTwitterFundo, .btnGithubFundo, .btnFacebookFundo {
        height: 100vh;
        width: 33.333%;
    }

    .btnFacebookFundo {
        background-color: #3b5998;
    }

    .btnGithubFundo {
        background-color: #171515;
    }

    .btnTwitterFundo {
        background-color: #00acee;
    }

    .blocoConteudoFacebook {
        display: inline-block;
        height: 70%;
        width: 80%;
        margin-left: 10%;
        margin-top: 15%;

        align-content: center;
        align-items: center;
        align-self: center;
    }

    .btnFacebook, .btnGithub, .btnTwitter {
        display: block;
        width: 200px;

        padding: 10px 32px;
        border-radius: 100px;
        margin: 0 auto;
        opacity: 0.8;
        transition: ease-in-out all 0.2s;

    }

    .btnFacebook {
        background-color: #1E3666;
        text-align: center
    }

    .btnGithub {
        background-color: #353131;
        text-align: center

    }

    .btnTwitter {
        background-color: #0f93c6;
        text-align: center
    }

    .btnFacebook:hover, .btnGithub:hover, .btnTwitter:hover {
        opacity: 1;
        transform: scale(1.2);
    }

    .imgFacebook {
        transform: scale(0.32);
        margin: 0 auto;
        transition: ease-in-out all 0.2s;
    }

    .imgGithub {
        transform: scale(0.34);
        margin: 0 auto;
        transition: ease-in-out all 0.2s;

    }

    .imgTwitter {
        transform: scale(0.34);
        margin: 0 auto;
        transition: ease-in-out all 0.2s;
    }

    .imgFacebook:hover {
        transform: scale(0.35);
    }

    .imgGithub:hover, .imgTwitter:hover {
        transform: scale(0.36);
    }

</style>
<x-guest-layout>

    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <div class="fundoBtns">
        <div class="btnFacebookFundo">
            <div class="blocoConteudoFacebook">
                <a class="btnFacebookImg" href="{{ route('social.login', ['provider' => 'facebook']) }}"><img
                        class="imgFacebook" src="{{ asset('img/facebook.svg') }}" alt="Facebook"></a>
                <a class="btnFacebook" href="{{ route('social.login', ['provider' => 'facebook']) }}">Login facebook</a>
            </div>
        </div>
        <div class="btnGithubFundo">
            <div class="blocoConteudoFacebook">
                <a class="btnGithubImg" href="{{ route('social.login', ['provider' => 'github']) }}"><img
                        class="imgGithub" src="{{ asset('img/placa-do-github.svg') }}" alt="GitHub"></a>
                <a class="btnGithub" href="{{ route('social.login', ['provider' => 'github']) }}">Login github</a>
            </div>
        </div>
        <div class="btnTwitterFundo">
            <div class="blocoConteudoFacebook">

                <a class="btnTwitterImg" href="{{ route('social.login', ['provider' => 'twitter']) }}"><img
                        class="imgTwitter" src="{{ asset('img/sinal-do-twitter.svg') }}" alt="Twitter"></a>
                <a class="btnTwitter" href="{{ route('social.login', ['provider' => 'twitter']) }}">Login twitter</a>
            </div>
        </div>
    </div>
</x-guest-layout>
