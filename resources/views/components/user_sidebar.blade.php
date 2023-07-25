@props(['url'])
<div>
    <div class="container">
        <nav class="navbar side d-inline">
            <a class="nav-item table @if($url == 'index') active @endif" href="{{route('user.profile.index', ['lang' => app()->getLocale(), 'id' => Auth::user()->id])}}"><img class="icon" src="{{asset('storage/img/icon-user.svg')}}"><span class="navbar-text">{{__('Détails')}}</span></a>
            <a class="nav-item table @if($url == 'create') active @endif" href="{{route('user.submission.create', ['lang' => app()->getLocale(), 'id'=>Auth::id()])}}"><img class="icon" src="{{asset('storage/img/icon-submit.svg')}}"><span class="navbar-text">{{__('Soumettre un mot')}}</span></a>
            <a class="nav-item table @if($url == 'submissions') active @endif" href="{{route('user.profile.submissions.index', ['lang' => app()->getLocale(), 'id' => Auth::user()->id])}}"><img class="icon" src="{{asset('storage/img/icon-inbox.svg')}}"><span class="navbar-text">{{__('Mes soumissions')}}</span></a>
            <a class="nav-item table @if($url == 'password') active @endif" href="{{route('user.profile.password.edit', ['lang'=> app()->getLocale(), 'id' => Auth::id()])}}"><img class="icon" src="{{asset('storage/img/icon-lock.svg')}}"><span class="navbar-text">{{__('Modifier mot de passe')}}</span></a>
            <form class="nav-item table" action="{{route('logout', app()->getLocale())}}" method="post">
                @csrf
                <button type="submit" class="border-0 bg-transparent p-0"><img class="icon" src="{{asset('storage/img/icon-logout.svg')}}"><span class="navbar-text">{{__('Logout')}}</span></button>
            </form>
        </nav>
    </div>
</div>
