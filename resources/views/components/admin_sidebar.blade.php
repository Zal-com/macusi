@props(['url'])
<div>
    <nav class="collapse d-lg-block sidebar collapse bg-white left">
        <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
                <a href="#" class="list-group-item list-group-item-action py-2 ripple @if($url == 'dashboard') active @endif">
                    <span><i class="fa-solid fa-tachometer-alt"></i> Dashboard</span>
                </a>
                <a href="{{ route('admin.dictionary.index') }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'dictionary') active @endif">
                    <span><i class="fa-solid fa-book"></i> Dictionnaire</span>
                </a>
                <a href="{{ route('admin.members')}}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'members') active @endif">
                    <span><i class="fa-solid fa-users"></i> Membres</span>
                </a>
                <a href="{{ route('admin.submissions') }}" class="list-group-item list-group-item-action py-2 ripple @if($url == 'submissions') active @endif">
                    <span><i class="fa-solid fa-inbox"></i> Soumissions</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple disabled">
                    <span><i class="fa-solid fa-chart-line"></i> Analytics</span>
                </a>
            </div>
        </div>
    </nav>
</div>
