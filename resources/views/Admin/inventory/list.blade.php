@extends('Admin.Layout.app')
@section('title', 'Inventory List')
@section('content')

<section class="admin-content">
    <div class="bg-dark">
        <div class="container  m-b-30">
            <div class="row">
                <div class="col-10 text-white p-t-40 p-b-90">

                    <h4 class="">
                        Manage Inventory List
                    </h4>
                </div>
            </div>
        </div>
    </div>

    <div class="container  pull-up">
        <div class="row">
            <div class="col-12">
                <div class="card">

                    <div class="card-body">
                        <div class="table-responsive p-t-10">
                            <table id="example" class="table " style="width:100%">
                                <thead>
                                    <tr>
                                        <th>inventoryId</th>
                                        <th>inventoryNumber</th>
                                        <th>stockItem</th>
                                        <th>lastModifiedDateTime</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @forelse($inventoryList as $inventory)
                                    <tr>
                                        <td>{{$inventory['inventoryId']}}</td>
                                        <td>{{$inventory['inventoryNumber']}}</td>
                                        <td>{{$inventory['stockItem']}}</td>
                                        <td>{{$inventory['lastModifiedDateTime']}}</td>
                                        <td>
                                            <a href="{{ url('admin/edit-inventory/'.$inventory['inventoryNumber']) }}" title="Edit"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td>No data Found!</td>
                                        </tr>
                                    @endforelse
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection()