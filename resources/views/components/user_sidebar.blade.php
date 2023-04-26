@props(['url'])
<div>
    <nav class="collapse d-lg-block sidebar collapse bg-white left">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('user.profile.index', ['id' => Auth::user()->id, 'lang' => app()->getLocale()]) }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'index') active @endif">
                    <span><i class="fa-regular fa-address-card"></i> {{__('Mon compte')}}</span>
                </a>
                <a href="{{ route('user.profile.edit', ['id' => Auth::user()->id, 'lang' => app()->getLocale()])}}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'edit') active @endif">
                    <span><i class="fa-solid fa-user-pen"></i> {{__('Modifier mes infos')}}</span>
                </a>
                <a href="{{ route('user.profile.submissions.index', ['id' => Auth::user()->id, 'lang' => app()->getLocale()]) }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'submissions') active @endif">
                    <span><i class="fa-solid fa-inbox"></i> {{__('Mes soumissions')}}</span>
                </a>
            </div>
        </div>
    </nav>
</div>
