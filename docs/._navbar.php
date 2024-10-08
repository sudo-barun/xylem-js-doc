<header class="navbar navbar-expand-lg sticky-top bg-body-tertiary">
	<nav class="container-xxl">
		<div>
			<button type="button"
				class="navbar-toggler p-2"
				data-bs-toggle="offcanvas"
				data-bs-target="#sidebar"
				style="border: none; box-shadow: none;"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16">
					<path fill-rule="evenodd" d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
				</svg>
			</button>
		</div>
		<a href="<?= attr(base_path('/')) ?>"
			class="navbar-brand"
		>XylemJS</a>
		<div class="d-flex">
			<button type="button"
				class="navbar-toggler d-flex d-lg-none p-2"
				data-bs-toggle="offcanvas"
				data-bs-target="#navbar"
				style="border: none; box-shadow: none;"
			>
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 16 16"
					class="bi bi-three-dots-vertical"
				>
					<path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0m0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
				</svg>
			</button>
		</div>
		<div id="navbar" class="offcanvas-lg offcanvas-end flex-grow-1">
			<div class="offcanvas-header px-4 pb-0">
				<h5 class="offcanvas-title">XylemJS</h5>
				<button type="button"
					class="btn-close"
					data-bs-dismiss="offcanvas"
					data-bs-target="#navbar"
				></button>
			</div>
			<div class="offcanvas-body p-4 pt-0 p-lg-0" ----class="collapse navbar-collapse" id="navbarSupportedContent">
				<hr class="d-lg-none">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a href="<?= attr(base_path('/')) ?>" class="nav-link">
							Home
						</a>
					</li>
					<li class="nav-item">
						<a href="<?= attr(base_path('/doc/installation/')) ?>" class="nav-link">
							Docs
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
</header>
