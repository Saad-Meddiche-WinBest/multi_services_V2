{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i>
        {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Societies" icon="la la-building" :link="backpack_url('societie')" />
<x-backpack::menu-item title="Cities" icon="la la-city" :link="backpack_url('citie')" />

<x-backpack::menu-item title="Services" icon="la la-server" :link="backpack_url('service')" />

<x-backpack::menu-item title="Categories" icon="la la-folder" :link="backpack_url('categorie')" />
<x-backpack::menu-item title="Demi categories" icon="la la-tags" :link="backpack_url('demi-categorie')" />
<x-backpack::menu-item title="Tags" icon="la la-tag" :link="backpack_url('tag')" />

<x-backpack::menu-item title="Plans" icon="la la-map" :link="backpack_url('plan')" />
<x-backpack::menu-item title="Premium" icon="la la-diamond" :link="backpack_url('premium')" />

@role('Super Admin')
    <x-backpack::menu-item title="Users" icon="la la-users" :link="backpack_url('user')" />
    <x-backpack::menu-item title="Roles" icon="la la-user-circle" :link="backpack_url('role')" />
@endrole
