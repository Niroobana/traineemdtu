<div class="row">
    <div class="col-md-6">
        {!!Form::select('employee_role','Employee Role',['resources'=>'Resources','coordinators'=>'Coordinators','trainees'=>'Trainees','staffs'=>'Staffs']) !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('first_name','First Name' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('last_name','Last Name' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('gender','Gender',['male'=>'Male','female'=>'Female']) !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('nic','NIC' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('email','Email' )->type('email')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('designation','Designation' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::textarea('address','Address' )!!}
    </div>
    {{-- <div class="col-md-6">
        {!!Form::select('department', 'Department')->options($department,'department') !!}
    </div> --}}
    <div class="col-md-6">
        {!!Form::text('mobile_no','Mobile No' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('grade','Grade' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('experience','Experience' )!!}
    </div>
</div>
