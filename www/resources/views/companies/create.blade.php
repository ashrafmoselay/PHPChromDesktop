
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			@lang('front.Add')
			<small>
				شركة
			</small>
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
		</h1>
	</section>
	<!-- Main content -->
	<form id="companyForm" action="{{route('companies.store')}}" method="post">
		{{ csrf_field() }}
		@include('companies._form')
	</form>
