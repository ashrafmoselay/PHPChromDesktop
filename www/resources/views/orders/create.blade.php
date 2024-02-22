
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			@lang('front.Add')
			<small>
				@if($type=='sales')
					@lang('front.order')
				@else
					@lang('front.purchase')
				@endif
			</small>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		</h1>
	</section>
	<!-- Main content -->
	<form action="{{route('orders.store')}}" method="post">
		{{ csrf_field() }}
		@include('orders._form')
	</form>
@include('orders.dicounts_bounse')
