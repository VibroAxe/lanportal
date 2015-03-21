@extends('layouts.default')
@section('content')
	@include('layouts.default.title')
	@include('layouts.default.alerts')

	@if( count($applications) )
		<table class="table states-current-usage">
		@foreach($applications as $application)
			<tr>
				<td class="application">
					<a href="{{ $application['url'] }}" title="View {{ $application['name'] }} in the Steam Store">
						<img src="{{ $application['logo_small'] }}" alt="{{ $application['name'] }}">
					</a>
				</td>
				<td class="user-count">
					{{ count($application['users']) }} In Game
				</td>
				<td class="user-list">
					@foreach( $application['users'] as $user )
						{{ link_to_route('users.show', $user['username'], $user['id']) }}					
					@endforeach
				</td>
			</tr>
		@endforeach
		</table>

	@else
		<p>No usage to show!</p>
	@endif

@endsection