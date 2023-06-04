<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Employee Service</a>
      </div>
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Employee <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('form.people')}}" class="{{request()->routeIs('form.people') ? 'active' : ''}}">Employee</a>
                </li>
                <li>
                    <a href="{{route('employee.view')}}" class="{{request()->routeIs('employee.view') ? 'active' : ''}}">All Employee</a>
                </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Company <span class="caret"></span></a>
            <ul class="dropdown-menu">
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
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Position <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="{{route('form.position')}}" class="{{request()->routeIs('form.position') ? 'active' : ''}}">Create Positon</a>
                </li>
                <li>
                    <a href="{{route('positions.view')}}" class="{{request()->routeIs('positions.view') ? 'active' : ''}}">List Positon</a>
                </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>