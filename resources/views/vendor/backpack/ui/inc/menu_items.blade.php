{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Users, Roles, Permissions -->

<x-backpack::menu-dropdown title="Authentification" icon="la la-users">
    <x-backpack::menu-dropdown-item title="Utilisateurs" icon="la la-user" :link="backpack_url('user')"/>
    <x-backpack::menu-dropdown-item title="Roles" icon="la la-id-badge" :link="backpack_url('role')"/>
    <x-backpack::menu-dropdown-item title="Permissions" icon="la la-key" :link="backpack_url('permission')"/>
</x-backpack::menu-dropdown>
<x-backpack::menu-item title="Dictionnaire" icon="la la-book-open" :link="backpack_url('mot')" />
<x-backpack::menu-item title="Soumissions" icon="la la-inbox" :link="backpack_url('mot-travail')"/>
<x-backpack::menu-item title="Syllabes" icon="la la-spell-check" :link="backpack_url('syllabe')"/>
<x-backpack::menu-item title="Votes" icon="la la-poll" :link="backpack_url('user-vote')"/>
<x-backpack::menu-item title="Types" icon="la la-question" :link="backpack_url('type')"/>
<x-backpack::menu-item title="Nationalités" icon="la la-flag" :link="backpack_url('nationalite')"/>
<x-backpack::menu-item title="Csv data" icon="la la-question" :link="backpack_url('csv-data')" />
