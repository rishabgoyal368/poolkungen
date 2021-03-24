<?php
if (isset($category_details)) {
    $title = 'Edit';
    $action = url('admin/movie/edit/' . $category_details['id']);
} else {
    $title = 'Add';
    $action = url('admin/movie/add');
}
?>
@extends('Admin.Layout.app')
@section('title', $title.' '.$label)
@section('content')
<style type="text/css">
    .uploader .img_load .img_cls{
        height: 33px;
        width: 116px;
    }
    .uploader .img_load{
        margin-left: -119px;
        opacity:0;
    }
</style>
<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-12 text-white p-t-40 p-b-90">

                    <h4 class=""> {{ $title }} {{$label}}</h4>

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
                        <form action="{{ $action }}" method="post" id="category_form" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ @$category_details['name'] }}" placeholder="Title">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Actor Name</label>
                                    <select class="form-control js-example-basic-multiple" name="actor_name[]" multiple>
                                        <option  disabled>Select</option>
                                        @foreach($actor_list as $actor)
                                            <option value="{{ $actor['id'] }}">{{ ucfirst($actor['first_name'])  }} {{ $actor['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <label id="actor_name[]-error" class="error" for="actor_name[]"></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Director Name</label>
                                    <select class="form-control js-example-basic-multiple" name="director[]" multiple>
                                        <option  disabled>Select</option>
                                        @foreach($director_list as $director)
                                            <option value="{{ $director['id'] }}">{{ ucfirst($director['first_name'])  }} {{ $director['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <label id="director[]-error" class="error" for="director[]"></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Crew Member</label>
                                    <select class="form-control js-example-basic-multiple" name="crew_member[]" multiple>
                                        <option  disabled>Select</option>
                                        @foreach($crew_member_list as $crew)
                                            <option value="{{ $crew['id'] }}">{{ ucfirst($crew['first_name'])  }} {{ $crew['last_name'] }}</option>
                                        @endforeach
                                    </select>
                                    <label id="crew_member[]-error" class="error" for="crew_member[]"></label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Tag</label>
                                    <input type="text" class="form-control" name="tag" value="{{ @$category_details['tag'] }}" placeholder="Tag">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Description</label>
                                    <textarea class="form-control" rows="6" cols="6" name="description" placeholder="Description">{{ @$category_details['description'] }}</textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <label>Media:</label>
                                <div class="col-sm-7">
                                
                                <div>
                                    <video src="" id="old_image" width="360px" height="240px" alt="No video" class="page_mngt_video" controls></video>
                                </div>
                                <div>
                                    <label for="img_upload" generated="true" class="error"></label>
                                    <div class="Upload-img mt-3" style="padding: 30px;">
                                        <span class="uploader">
                                            <button type="button" class="btn btn-danger">Change Media</button>
                                            <span class="img_load">
                                                <input type="file" name="video" id="img_upload"  class="img_cls " accept="video/*">
                                            </span>
                                        </span>
                                    </div>
                                     <label for="img_upload" generated="true" class="error"></label>
                                </div>
                                </div>
                            </div>

                            @csrf
                            <div class="form-group">
                                <input type="submit" value="Submit" class="btn btn-primary">
                                <a href="{{'/admin/movie'}}" class="btn btn-info">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>
<script type="text/javascript">
    $('#category_form').validate({
        rules: {
            name: {
                required: true,
                minlength: 2,
                maxlength: 30,
            },
            "actor_name[]": {
                required: true,
            },
            "director[]": {
                required: true,
            },
            "crew_member[]": {
                required: true,
            },
            tag: {
                required: true,
                minlength:5,
                maxlength:50,
            },
            description: {
                required: true,
                minlength:5,
                maxlength:1000,
            },
            video:{
                required:true,
            },
        },
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        function readURL(input)
        {
            if(input.files && input.files[0]) {

                var reader = new FileReader();
                reader.onload = function(e) 
                {
                    $('#old_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#img_upload').change(function(){

            var img_name = $(this).val();
           //debugger;
            if(img_name != '' && img_name != null) {

                var img_arr = img_name.split('.');

                var ext = img_arr.pop();
                ext = ext.toLowerCase();
                // alert(ext); return false;

                if(ext == 'mp4' || ext == '3gp' || ext == '.gif' || ext == 'flv'|| ext =='webm') {
                    input = document.getElementById('img_upload');

                    readURL(this);
                } else{

                    $(this).val('');
                    alert('Please select an image of video file format.');
                }
            }
        });
    });
</script>
@endsection