{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
    </ul>
</li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mot') }}"><i class="nav-icon la la-question"></i> Mots</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('mot-travail') }}"><i class="nav-icon la la-question"></i> Mot travails</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('syllabe') }}"><i class="nav-icon la la-question"></i> Syllabes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user-vote') }}"><i class="nav-icon la la-question"></i> User votes</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('nationalite') }}"><i class="nav-icon la la-question"></i> Nationalites</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('type') }}"><i class="nav-icon la la-question"></i> Types</a></li>