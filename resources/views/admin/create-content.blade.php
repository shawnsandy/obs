@extends(Jarvis::views('layouts.dashboard'))
@section('content')
<div class="widgets">

@include(jarvis_views("partials.messages"))

	<div class="columns">
		<div class="column">
			<div class="cards">

				<div class="card-content">

					<header class="header">
						<div class="subtitle is-3">
							<i class="im im-note-o"></i> Posts</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>

				</div>

			</div>

		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3">
							<i class="im im-users"></i> Users</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3">
							<i class="im im-control-panel"></i> Options</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3">
							<i class="im im-gear"></i> Settings</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

	</div>

</div>

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">
					@include('backstory::forms.create')
				</div>
			</div>

			<div class="section"></div>

		</div>

		<div class="column is-3 sidebar-right">
			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-3">
							<i class="im im-info"></i>
							Dashboard Sidebar
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>
</section>

@endsection
@include("backstory::partials.scripts")
