@extends('Admin.Layout.app')
@section('title', 'Edit Inventory')
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class=""> Edit Inventory</h4>

                </div>
            </div>
        </div>
    </div>

    <div class="container  pull-up">
        <div class="row">
            <div class="col-lg-12">

                <!--widget card begin-->
                <div class="card m-b-30">
                    <div class="card-body ">
                        @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li class="error"> {{ $error }} </li>
                            @endforeach
                        </ul>
                        @endif
                        <form action="{{url('admin/save-inventory')}}" method="post" id="add_edit_user" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{@$inventory['inventoryNumber']}}">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Inventory Number :- <b>{{@$inventory['inventoryNumber']}}</b></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">E-commerce price *</label>
                                    <input type="number" class="form-control" name="actual_price" id="actual_price" placeholder="E-commerce price*" required value="{{old('actual_price') ?: @$inventory_data['price']}}">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputEmail4">Proudct Image*</label>
                                    <input type="file" class="form-control" name="images[]" id="images" required multiple accept='image/jpeg,image/jpg,image/png'>
                                </div>
                            </div>

                            <div class="form-row">
                                <input type="hidden" name="is_image" value="true">
                                @foreach ($inventory_data['images'] as $image)
                                <div class="col-md-2 inventory_image_block">
                                    <div class="inventory_image">
                                        <input type="hidden" name="is_image" value="false">
                                        <img src="{{asset('/uploads/inventory')}}/{{$image->image}}" alt="">
                                    </div>
                                    <a class="btn btn-danger inventory_image_delete" onclick="deleteImage({{$image->id}})" ">Delete</a>
                                </div>
                                @endforeach
                            </div>


                            <div class=" form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                        <a href="{{url('/admin/manage-inventory')}}" class="btn btn-info">Back</a>
                                </div>
                        </form>
                    </div>
                </div>
                <!--widget card ends-->



            </div>
        </div>


    </div>
</section>


<script type="text/javascript">
    function deleteImage(id) {
        var conf = confirm('Do you really want to submit the form?');
        console.log(conf)
        if (conf == true) {
            $.ajax({
                url: '/admin/delete-image',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {
                    'id': id
                },
                success: function(result) {
                    // console.log(result.success)
                    if (result.error) {
                        alert(result.error)
                    } else if (result.success) {
                        location.reload();
                    }
                }
            });
        }
    }
    $('#add_edit_user').validate({
        ignore: [],
        rules: {
            actual_price: {
                required: true,
                digit: true,
                max: 1,
            },
            'images[]': {
                required: true,
            },
        },
        errorPlacement: function(error, element) {
            if (element.parent('.input-group').length) {
                error.insertAfter(element.parent()); // radio/checkbox?
            } else if (element.hasClass('js-select2')) {
                error.insertAfter(element.next('span')); // select2
            } else {
                error.insertAfter(element); // default
            }
        },
    });
</script>
@endsection