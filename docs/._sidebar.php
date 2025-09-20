<nav>
	<div>
		Getting Started
	</div>
	<ul class="nav flex-column">
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/quick-start/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/quick-start/' ? 'active' : '' ?>">
				Quick Start
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/installation/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/installation/' ? 'active' : '' ?>">
				Installation
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/typescript/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/typescript/' ? 'active' : '' ?>">
				TypeScript
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/jsx/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/jsx/' ? 'active' : '' ?>">
				JSX
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/hello-world-example/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/hello-world-example/' ? 'active' : '' ?>">
				Hello World example
			</a>
		</li>
	</ul>

	<div>
		Learn
	</div>
	<ul class="nav flex-column">
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/reactivity/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/reactivity/' ? 'active' : '' ?>">
				Reactivity
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/component/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/component/' ? 'active' : '' ?>">
				Component
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/conditional/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/conditional/' ? 'active' : '' ?>">
				Conditional
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/loop/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/loop/' ? 'active' : '' ?>">
				Loop
			</a>
		</li>
		<li class="nav-item">
			<a href="<?= attr(base_path('/doc/attribute/')) ?>" class="nav-link <?= page_path($pageDir) === 'doc/attribute/' ? 'active' : '' ?>">
				Attribute
			</a>
		</li>
	</ul>

</nav>
