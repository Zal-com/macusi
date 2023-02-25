@props(['url'])
<div>
    <nav class="collapse d-lg-block sidebar collapse bg-white left">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="{{ route('user.profile.index', ['id' => Auth::user()->id]) }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'index') active @endif">
                    <span>Mon compte</span>
                </a>
                <a href="{{ route('user.profile.edit', ['id' => Auth::user()->id])}}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'edit') active @endif">
                    <span>Modifier mes infos</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                    <span>Mes soumissions</span>
                </a>
            </div>
        </div>
    </nav>
</div>
