<header>
    <nav>
        <ul>
            People
            {{-- <li>
                <a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Inicio</a>
            </li> --}}
            <li>
                <a href="{{route('form.people')}}" class="{{request()->routeIs('form.people') ? 'active' : ''}}">People</a>
            </li>
            <li>
                <a href="{{route('employee.view')}}" class="{{request()->routeIs('employee.view') ? 'active' : ''}}">All People</a>
            </li>
        </ul>
        <ul>
            Companies
            <li>
                <a href="{{route('form.company')}}" class="{{request()->routeIs('form.company') ? 'active' : ''}}">Create Company</a>
            </li>
            <li>
                <a href="{{route('companies.view')}}" class="{{request()->routeIs('companies.view') ? 'active' : ''}}">List Company</a>
            </li>
            <li>
                <a href="{{route('contracts.view')}}" class="{{request()->routeIs('contracts.view') ? 'active' : ''}}">List Contracts</a>
            </li>
        </ul>
        <ul>
            Positions
            <li>
                <a href="{{route('form.position')}}" class="{{request()->routeIs('form.position') ? 'active' : ''}}">Create Positon</a>
            </li>
            <li>
                <a href="{{route('positions.view')}}" class="{{request()->routeIs('positions.view') ? 'active' : ''}}">List Positon</a>
            </li>
        </ul>
    </nav>
</header>