@extends('frontlayout')
@section('content')
<div class="container my-4">
	<h3 class="mb-3">Room Booking</h3>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <p class="text-danger">{{$error}}</p>
        @endforeach
    @endif

    @if(Session::has('success'))
    <p class="text-success">{{session('success')}}</p>
    @endif
    <div class="table-responsive">
        <form method="post" enctype="multipart/form-data" action="{{url('admin/booking')}}">
            @csrf
            <table class="table table-bordered">
                <tr>
                    <th>CheckIn Date <span class="text-danger">*</span></th>
                    <td><input name="checkin_date" type="date" class="form-control checkin-date" /></td>
                </tr>
                <tr>
                    <th>CheckOut Date <span class="text-danger">*</span></th>
                    <td><input name="checkout_date" type="date" class="form-control" /></td>
                </tr>
                <tr>
                    <th>Avaiable Rooms <span class="text-danger">*</span></th>
                    <td>
                        <select class="form-control room-list" name="room_id">

                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Total Adults <span class="text-danger">*</span></th>
                    <td><input name="total_adults" type="text" class="form-control" /></td>
                </tr>
                <tr>
                    <th>Total Children</th>
                    <td><input name="total_children" type="text" class="form-control" /></td>
                </tr>
                <tr>
                    <td colspan="2">
                    	<input type="hidden" name="customer_id" value="{{session('data')[0]->id}}" />
                    	<input type="hidden" name="ref" value="front" />
                        <input type="submit" class="btn btn-primary" />
                    </td> 
                </tr>
            </table>
        </form>
    </div>               
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".checkin-date").on('blur',function(){
            var _checkindate=$(this).val();
            // Ajax
            $.ajax({
                url:"{{url('admin/booking')}}/available-rooms/"+_checkindate,
                dataType:'json',
                beforeSend:function(){
                    $(".room-list").html('<option>--- Loading ---</option>');
                },
                success:function(res){
                    var _html='';
                    $.each(res.data,function(index,row){
                        _html+='<option value="'+row.room.id+'">'+row.room.title+'-'+row.roomtype.title+'</option>';
                    });
                    $(".room-list").html(_html);
                }
            });
        });
    });
</script>

@endsection