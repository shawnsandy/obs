@extends(Jarvis::views('layouts.dashboard'))
@section('content')
<div class="section"></div>
<div class="widgets">

</div>

<section class="">

	<div class="columns">

		<div class="column dash-main">

			<div class="cards">
				<div class="card-content">

					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-note-o"></i>
							Content
						</div>
						<p>
							<a href="/admin/content/create" class="button is-success">Add Content</a>
							 {{--  @include('backstory::components.modals-categories')  --}}
						</p>
					</div>

					<div class="collections-element">
						<div class="collection-element flex-element-left is-uppercase" data-module="">
							<div>
								<div class="columns">
									<div class="column">Title</div>
									<div class="column is-2">Published</div>
									<div class="column is-2">actions</div>
								</div>
							</div>
						</div>
						@foreach ($content as $item)
							<div class="collection-element flex-element-left" data-module="">
							<div>
								<div class="columns">
									<div class="column">{{ $item->title }}</div>
									<div class="column is-2">{{ $item->created_at->diffForHumans() }}</div>
									<div class="column is-2">
										<a href="/admin/content/{{ $item->id }}/edit" class="button is-info is-small">Edit</a>
										<a href="/content/delete" class="button is-info is-small">Delete</a>
									</div>
								</div>
							</div>
							</div>
						@endforeach

					</div>
				</div>
			</div>

		</div>

		<div class="column is-3 sidebar-right">

			<div class="cards">
				<div class="card-content">
					<div class="header">
						<div class="subtitle is-5 is-uppercase">
							<i class="im im-info"></i>
							Categories
						</div>
					</div>
					<hr>
					@include('backstory::forms.categories')

					<hr>

				</div>
			</div>
			<hr>
			@component('backstory::components.categories')
			<p class="is-size-7 is-uppercase">
				Story Categories

			</p>
			@endcomponent

		</div>

	</div>
</section>

@endsection
