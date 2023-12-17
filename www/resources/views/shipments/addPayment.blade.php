<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        تقفيل الشيت
        <small>
            {{ $record->id }}
        </small>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times"></i></button>
    </h1>
</section>
<!-- Main content -->
@php
    $shipTotal = $record->total;
    $totalShipping = $record->total_shipping;
    $totalReturnShipping = 0;
    if (isset($settings['show_shipment_company']) && $settings['show_shipment_company'] == 1) {
        $totalReturnShipping = $record->total_fee;
    }
@endphp
<form action="{{ route('shipments.addPayment', $record) }}" method="post">
    {{ csrf_field() }}
    <section class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>المبلغ</label>
                            <input value="{{ $shipTotal - $totalShipping - $totalReturnShipping }}" required
                                name="paid" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">@lang('front.save')</button>
            </div>
        </div>
    </section>

</form>
