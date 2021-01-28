<div class="row">
    <div class="col-md-6">
        {!!Form::text('username','User Name')!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('name','Name') !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('email','Email') !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('password','Password') !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('phone', 'Phone') !!}
    </div>
    <div class="col-md-6">
        {!!Form::text('address','Address' )!!}
    </div>
    <div class="col-md-6">
        {!!Form::select('gender','Gender',['male'=>'Male','female'=>'Female'])!!}
    </div>
    <div class="col-md-6">
        {!!Form::text('city','City' )!!}
    </div>
</div>
