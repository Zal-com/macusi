@props(['url'])
<div>
    <!--
    <nav class="collapse d-lg-block sidebar collapse bg-white left">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('user.profile.index', ['id' => Auth::user()->id, 'lang' => app()->getLocale()]) }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'index') active @endif">
                    <span><i class="fa-regular fa-address-card"></i> {{__('Détails')}}</span>
                </a>
                <a href="{{-- route('dictionary.create', ['id' => Auth::user()->id, 'lang' => app()->getLocale()])--}}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'edit') active @endif">
                    <span><i class="fa-solid fa-user-pen"></i> {{__('Soumettre un mot')}}</span>
                </a>
                <a href="{{ route('user.profile.submissions.index', ['id' => Auth::user()->id, 'lang' => app()->getLocale()]) }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'submissions') active @endif">
                    <span><i class="fa-solid fa-inbox"></i> {{__('Mes soumissions')}}</span>
                </a>
            </div>
        </div>
    </nav>
    -->
    <div class="container">
        <nav class="navbar side">
            <a class="nav-item table @if($url == 'index') active @endif" href="{{route('user.profile.index', ['lang' => app()->getLocale(), 'id' => Auth::user()->id])}}"><img class="icon" src="{{asset('storage/img/icon-user.svg')}}"><span class="navbar-text">Détails</span></a>
            <a class="nav-item table" href=""><img class="icon" src="{{asset('storage/img/icon-submit.svg')}}"><span class="navbar-text">Soumettre un mot</span></a>
            <a class="nav-item table @if($url == 'submissions') active @endif" href="{{route('user.profile.submissions.index', ['lang' => app()->getLocale(), 'id' => Auth::user()->id])}}"><img class="icon" src="{{asset('storage/img/icon-inbox.svg')}}"><span class="navbar-text">Mes soumissions</span></a>
            <a class="nav-item table" href=""><img class="icon" src="{{asset('storage/img/icon-lock.svg')}}"><span class="navbar-text">Modifier mot de passe</span></a>
            <form class="nav-item table" action="{{route('logout', app()->getLocale())}}" method="post">
                @csrf
                <button type="submit" class="border-0 bg-transparent"><img class="icon" src="{{asset('storage/img/icon-logout.svg')}}"><span class="navbar-text">Se déconnecter</span></button>
            </form>
        </nav>
    </div>
</div>
