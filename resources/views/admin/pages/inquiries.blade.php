@extends("admin.admin_app")

@section("content")
<div id="main">
	<div class="page-header">

		<h2>@if(Auth::User()->usertype != "Admin") {{__('text.Inquiries Heading')}} @else Inquiries @endif</h2>
	</div>
	@if(Session::has('flash_message'))
				    <div class="alert alert-success">
				    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
				        {{ Session::get('flash_message') }}
				    </div>
	@endif

<div class="panel panel-default panel-shadow">
    <div class="panel-body">

        <table id="data-table1" class="table table-striped table-hover dt-responsive" cellspacing="0" width="100%">
            <thead>
	            <tr>
	                <th>@if(Auth::User()->usertype != "Admin"){{__('text.Property ID')}}@else Property ID @endif</th>
                    <th>@if(Auth::User()->usertype != "Admin"){{__('text.Agent')}}@else Agent @endif</th>
                    <th>@if(Auth::User()->usertype != "Admin"){{__('text.Name')}}@else Name @endif</th>
	                <th>Email</th>
                    <th>@if(Auth::User()->usertype != "Admin"){{__('text.Phone')}}@else Phone @endif</th>
                    <th>@if(Auth::User()->usertype != "Admin"){{__('text.Sent On')}}@else Posting Date @endif</th>
                    <th>@if(Auth::User()->usertype != "Admin"){{__('text.Message')}}@else Message @endif</th>
                    <th class="text-center width-100">@if(Auth::User()->usertype != "Admin"){{__('text.Action')}}@else Action @endif</th>
	            </tr>
            </thead>

            <tbody>
            @foreach($inquirieslist as $i => $inquiries)

                <?php
                $date=date_create($inquiries->created_at);
                $date = date_format($date,"d-F-Y");
                ?>

         	   <tr>

                <td>{{ $inquiries->property_id }}</td>
                <td>{{ $inquiries->user->name }}</td>
                <td>{{ $inquiries->name }}</td>
                <td>{{ $inquiries->email }}</td>
                <td>{{ $inquiries->phone }}</td>
                <td>{{ $date }}</td>
                <td>{{ $inquiries->message }}</td>
                <td class="text-center">
                	<a href="{{ url('admin/inquiries/delete/'.$inquiries->id) }}" class="btn btn-default btn-rounded"><i class="md md-delete"></i></a>


            </td>

            </tr>
           @endforeach

            </tbody>
        </table>
    </div>
    <div class="clearfix"></div>
</div>

</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function(){

        @if(Auth::User()->usertype == "Admin")

        $('#data-table1').dataTable({
            "order": [[ 0, "desc" ]] // Order on init. # is the column, starting at 0
        });

        @else

        $('#data-table1').dataTable( {
            "oLanguage": {
                "sLengthMenu": "<?php echo __('text.Show') . ' _MENU_ ' . __('text.records'); ?>",
                "sSearch": "<?php echo __('text.Search') . ':' ?>",
                "sInfo": "<?php echo __('text.Showing') . ' _START_ ' . __('text.to') . ' _END_ ' . __('text.of') . ' _TOTAL_ ' . __('text.items'); ?>",
                "oPaginate": {
                    "sPrevious": "<?php echo __('text.Previous'); ?>",
                    "sNext": "<?php echo __('text.Next'); ?>"
                },
                "sEmptyTable": '<?php echo __('text.No data available in table'); ?>'
            }
        });

        @endif

        $('#data-table1 tr').click(function () {

            if($('#data-table1 tr').hasClass("bg_color"))
            {
                $('#data-table1 tr').removeClass("bg_color");
            }
            else
            {
                $(this).addClass("bg_color");
            }


        });

    });
</script>


    <style>

        tr.bg_color  {
            background-color: #edf671 !important;
        }

    </style>


@endsection
