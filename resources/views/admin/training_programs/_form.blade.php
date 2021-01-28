<div class="row">
    <div class="col-md-6">
        {!!Form::text('program_name','Program Name')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('date','Date')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('location','Location')!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('program_type','Program Type',['diploma'=>'Diploma','certificate'=>'Certificate','other'=>'Other']) !!}
        </div>
    <div class="col-md-6">
        {!!Form::text('duration','Duration')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('content','Content')!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('target_group', 'Target Group')->options($target_group,'target_group') !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('no_of_trainees','No Of Trainees')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('no_of_resources','No Of Resources')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('no_of_staffs','No Of Staffs')!!}
    </div>
</div>
