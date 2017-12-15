@extends(Jarvis::views('layouts.dashboard'))
@section('content')
    <div class="widgets">
	<div class="columns">
		<div class="column">
			<div class="cards">

				<div class="card-content">

					<header class="header">
						<div class="subtitle is-3"> <i class="im im-note-o"></i> Posts</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>

				</div>

			</div>

		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3"> <i class="im im-users"></i> Users</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3"> <i class="im im-control-panel"></i> Options</div>
					</header>
					<p>Lorem ipsum dolor sit amet.</p>
				</div>
			</div>
		</div>

		<div class="column">
			<div class="cards">

				<div class="card-content">
					<header class="header">
						<div class="subtitle is-3"> <i class="im im-gear"></i> Settings</div>
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
					<div class="header">
						<div class="subtitle is-3"> <i class="im im-bar-chart"></i> Analytics</div>
					</div>
					<p class="">
						Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur
					</p>
				</div>
			</div>

			<div class="cards">
				<div class="card-content">
					<p class="">
						Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus deleniti
						ex ut sint eveniet dicta similique aut neque unde dolorum nobis, quidem blanditiis impedit reiciendis consectetur eligendi.
					</p>
				</div>
                <div>
                <div class="card-content">
                <p class="subtitle is-3"><i class="im im-users"></i> User Roles</p>
                @component("dashauth::forms.roles", [ "user" => Auth::user() ])
                @slot('btn_class')  button is-info is-large is-uppercase  @endslot
                @endcomponent
                </div>

                {{--  <div class="card-content">
                @component('dashauth::components.privileges')

                @endcomponent
                </div>

                <div class="card-content">
                @component('dashauth::components.roles.form',  [ "user" => Auth::user() ])

                @slot('remove_role')
                    @component('dashauth::components.roles.button-remove-role')

                    @endcomponent
                @endslot

                @slot('assign_role')
                @component('dashauth::components.roles.button-assign-role')

                @endcomponent
                @endslot

                @endcomponent
                </div>  --}}

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
		<p class="class">
			Quia ex et reprehenderit cum sit maxime. Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam temporibus deleniti
			ex ut sint eveniet dicta similique aut neque unde dolorum nobis, quidem blanditiis impedit reiciendis consectetur eligendi
			quibusdam, saepe quam, laboriosam ducimus atque id! Nesciunt porro dolores mollitia inventore exercitationem, quae fugit
			fuga quidem autem accusantium quo dolor et esse consectetur ad eius. Ab nesciunt alias deserunt magni ullam asperiores
			quos corrupti velit inventore tempore iure, unde similique nihil voluptas magnam cum esse dignissimos at eveniet repudiandae.
			Praesentium temporibus nesciunt maxime aliquam architecto sed doloremque, id libero, placeat esse totam repellendus fugiat
			consequatur blanditiis nulla ullam similique unde accusamus?
		</p>
	</div>
</div>

		</div>

	</div>
</section>

@endsection
