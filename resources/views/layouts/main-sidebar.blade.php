<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href=""><img src="{{URL::asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href=""><img src="{{URL::asset('assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href=""><img src="{{URL::asset('assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href=""><img src="{{URL::asset('assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
						<a href="{{ url('/home') }}"><img alt="user-img" class="avatar avatar-xl brround" src="{{ asset('./uploads/profiles/'.auth()->user()->profile) }}"></a><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
							<span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					@if (auth()->user()->id_role == '1')
					<li class="side-item side-item-category">GRHMS</li>
							<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='ListeCondidats') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Liste des condidats</span></a>
					</li>
					<li class="side-item side-item-category">Employees</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span class="side-menu__label">Employees</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/ListeEmployees')}}">Liste des employees</a></li>
							<li><a class="slide-item" href="{{ url('/AjouterEmployer') }}">Ajoutez un employee</a></li>
		
						</ul>
					</li>
					</li>
					<li class="side-item side-item-category">Documents</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/></svg><span class="side-menu__label">Documents</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/AjouterDoc') }}">Ajoutez un document</a></li>
							<li><a class="slide-item" href="{{ url('/ListeDoc') }}">Liste des documents</a></li>
							<li><a class="slide-item" href="{{ url('/ListeDem') }}">Liste des demandes</a></li>
						</ul>
					</li>
					<li class="side-item side-item-category">Congés</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="side-menu__label">Conges</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/DemCon') }}">Les demandes de congés</a></li>
						</ul>
					</li>
                    @endif
					@if (auth()->user()->id_role == '2')
					<li class="side-item side-item-category">GRHMS</li>
							<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='ListeCondidats') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg><span class="side-menu__label">Profile</span></a>
					</li>
					<li class="side-item side-item-category">Documents</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V8l-6-6z"/><path d="M14 3v5h5M16 13H8M16 17H8M10 9H8"/></svg><span class="side-menu__label">Documents</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/Mes_demandes_docs') }}">Mes demandes</a></li>
							<li><a class="slide-item" href="{{ url('/DemandeDoc') }}">Demande des document</a></li>
						</ul>
					</li>
					<li class="side-item side-item-category">Conges</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#') }}"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><span class="side-menu__label">Conges</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{ url('/Mes_demandes_conge') }}">Mes demandes</a></li>
							<li><a class="slide-item" href="{{ url('/DemandeConge') }}">Demande de conge</a></li>
						</ul>
					</li>
					@endif
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
