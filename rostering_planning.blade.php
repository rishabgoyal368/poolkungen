@extends('admin.layouts.app',['title' => 'Rostering Planning'])

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
        @include('flash-message')
        <div class="cus-page-heading">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title">Rostering Planning</h4>
                    {{ Breadcrumbs::render('rostering-planning-view1') }}
                </div>
            </div>

        </div>
        <div class="card">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group button_block">
                        <a class="btn green-btn active" href="{{url('admin/rostering-planning-view1')}}">View1 Site per weekly</a>
                        <a class="btn orange-btn" href="{{url('admin/rostering-planning-view2')}}">View2 Site per month</a>
                        <a class="btn light_prple-btn" href="{{url('admin/rostering-planning-view3')}}">View3 All site per month</a>
                        <a class="btn purple-btn" href="{{url('admin/rostering-planning-view4')}}">view4 officer per month</a>
                    </div>
                </div>
            </div>

            <form method="GET" action="{{url('admin/rostering-planning-view1')}}">
                <div class="row">
                    <div class="col-2">
                        <h4 class="report-search-btn">Schedule Week</h4>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="employee">Schedule From</label>
                            <input type="text" class="form-control roaster_datepicker_start" name="schedule_from" placeholder="Schedule From" value="{{@$inputs['schedule_from']}}" readonly>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group">
                            <label for="employee">Schedule To</label>
                            <input type="text" class="form-control roaster_datepicker_end" name="schedule_to" placeholder="Schedule To" value="{{@$inputs['schedule_to']}}" readonly>
                        </div>
                    </div>
                    <div class="col-2">
                        <div class="form-group">
                            <button class="btn btn-primary report-search-btn" type="submit"><i class="mdi mdi-search-web"></i></button>
                            <a class="btn btn-danger report-search-btn" href="{{url('/admin/rostering-planning-view1')}}" title="Reset Filters"><i class="mdi mdi-refresh"></i></a>
                        </div>
                    </div>
                </div>
            </form>

            <form action="" method="get">
                <div class="row">
                    <div class="col-md-2">
                        <div class="form-group">
                            <select name="zone" class="form-control js-example-basic-multiple">
                                <option value="">Select Area</option>
                                @foreach($jobArea as $row)
                                <option value="{{$row->_id}}" {{$zone == $row->_id ? 'selected' : ''}}>{{$row->jobarea_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <select name="zone" class="form-control js-example-basic-multiple" id="">
                                <option value="">Select Site</option>
                                @foreach($show_sites as $site)
                                <option value="{{$site->_id}}" {{$zone == $site->_id ? 'selected' : ''}}>{{$site->site_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <div class="form-group text-right">
                            <button class="btn btn-default">Unassigned Sites</button>
                            <button class="btn btn-default">Monthly Roaster</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="card-body">

                <div id="accordion" class="accordion">
                    @foreach($sites as $key => $site)
                    <div class="card-inner">
                        <div class="card-header collapsed {{$key == 0 ? 'collapsed' : ''}}" data-toggle="collapse" href="#collapse_{{$site['_id']}}">
                            <a class="card-title">{{$site->site_name}}</a>
                        </div>
                        <div id="collapse_{{$site['_id']}}" class="collapse {{$key == 0 ? 'show' : ''}}" data-parent="#accordion">

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped roaster-planning">
                                            <thead>
                                                <tr class="head-1">

                                                    <th>S.No</th>
                                                    <th>Employee Name</th>
                                                    @foreach($days as $day)
                                                    <th>
                                                        {{$day['date']}} <br>
                                                        {{$day['day']}}
                                                    </th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($shifts as $shift)
                                                @php
                                                $getRosterView1 = $site->getRosterView1(@$site->_id,$shift->_id);
                                                $is_published[] = @$getRosterView1['status'] == 'true' ? 'true' : 'false';
                                                $getEmployee = $site->getEmployee(@$site->_id,$shift->_id);
                                                @endphp
                                                <tr class="head-1">
                                                    <td colspan="8" class="shift-heading">{{$shift->name}} - {{@$getRosterView1 ? count($getRosterView1->employee_id) : 0}} officer</td>
                                                </tr>
                                                <tr>
                                                    <td>{{_('1')}}</td>
                                                    <td class="roasting_select rostering-section" @if(@$getRosterView1['status']=='true' ) data-roster_id="{{$getRosterView1 ? $getRosterView1->_id : ''}}" @endif>
                                                        <select name="employee[]" multiple class="js-example-basic-multiple" multiple>
                                                            @foreach($employes as $employee)
                                                            <option value="{{$employee->_id}}" @if(!empty($getRosterView1)) @if(in_array($employee->_id,$getRosterView1->employee_id)) selected @endif @endif>{{$employee->principle_name}}</option>
                                                            @endforeach
                                                        </select>
                                                        @if(empty($getRosterView1) || @$getRosterView1->status == 'false')
                                                        <span class="green-tick change_emp_request" data-roster_id="{{$getRosterView1 ? $getRosterView1->_id : ''}}" data-site="{{$site->_id}}" data-shift="{{$shift->_id}}" data-page_name="Assign employee" data-status="true" style="cursor: pointer;"><i class="fa fa-check " aria-hidden="true"></i></span>
                                                        @elseif($getRosterView1->status == 'true')
                                                        <span class="red-tick change_emp_request" data-roster_id="{{$getRosterView1 ? $getRosterView1->_id : ''}}" data-site="{{$site->_id}}" data-shift="{{$shift->_id}}" data-page_name="Disapprove employee" data-status="false" style="cursor: pointer;"><i class="fa fa-times" aria-hidden="true"></i></span>
                                                        @endif
                                                    </td>
                                                    @foreach($days as $day)
                                                    <td>
                                                        {{ $getEmployee }}
                                                    </td>
                                                    @endforeach
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    @if($is_show == 'true')
                                    <div class="publish-button">
                                        @if(in_array('false',$is_published))
                                        <button class="btn publish_roster" data-roster_id="{{$getRosterView1 ? $getRosterView1->_id : ''}}" data-page_name="Publish the employees">Publish</button>
                                        @else
                                        <button class="btn publish_roster published">Published</button>
                                        @endif
                                    </div>
                                    @endif
                                </div>
                            </div>


                        </div>
                    </div>
                    @endforeach
                </div>

                {{$sites->links()}}


            </div>
        </div>
    </div>
</div>
@endsection