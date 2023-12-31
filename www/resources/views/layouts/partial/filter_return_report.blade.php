
<div class="row hideprint" style="margin-top: 10px;">
    <div class="col-md-12">
        <form action="" method="get">
            <div class="col-md-3">
                <div class="form-group ">
                    <input id="fromdate" placeholder="@lang('front.datefrom')" autocomplete="off" style="direction: rtl;" name="fromdate" value="{{request()->fromdate}}" type="text" class="form-control datepicker">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <input id="todate" placeholder="@lang('front.dateto')" autocomplete="off" style="direction: rtl;" name="todate" value="{{request()->todate}}" type="text" class="form-control datepicker">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    @php
                        $persons = \App\Person::where('type','client')->get();
                    @endphp
                    <select id="client_id" data-placeholder="@lang('front.all')" name="client_id" class="form-control select2 " style="width:100%;">
                        <option value="">@lang('front.all')</option>
                        @foreach($persons as $per)
                            <option {{request('client_id')==$per->id?'selected':''}} value="{{$per->id}}">{{$per->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    @php
                        $employees = \App\Employee::query()->get();
                    @endphp
                    <select id="sale_id" data-placeholder="@lang('front.all')" name="sale_id" class="form-control select2 " style="width:100%;">
                        <option value="">@lang('front.all')</option>
                        @foreach($employees as $per)
                            <option {{request('sale_id')==$per->id?'selected':''}} value="{{$per->id}}">{{$per->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <button  type="submit" class="btn btn-primary form-control">@lang('front.search')</button>
            </div>


        </form>
    </div>
</div>
@push('js')
    <script>
        $('.datepicker').datepicker({
            autoclose: true,
            rtl: true,
            format: 'yyyy-mm-dd',
            language: "{{\Session::get('locale')}}",
        });
        $(".select2").select2({allowClear: true});
    </script>
@endpush
