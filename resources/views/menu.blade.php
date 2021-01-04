<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="collapse navbar-collapse">
		<a href="/" class="navbar-brand">
			CIGeoE
		</a>
		<div class="navbar-nav">
			<a href="/" class="nav-item nav-link @yield('menu_home')">Home</a>
			<a href="/uc/create" class="nav-item nav-link @yield('menu_register')">Informática</a>
			<a href="/seguranca" class="nav-item nav-link @yield('menu_seguranca')">Segurança</a>
			<a href="/logistica" class="nav-item nav-link @yield('menu_logistica')">Logística</a>
			<a href="/contactus" class="nav-item nav-link @yield('menu_contactus')">Contactos</a>
		</div>
		</div>
		<div class="logout">
		<a href="#">Logout</a>
	</div>
</nav>