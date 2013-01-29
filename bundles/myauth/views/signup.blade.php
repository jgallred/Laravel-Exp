{{ Form::open(Config::get('myauth::config.bundle_route') . '/' . Config::get('myauth::config.signup_route')) }}

    <!-- first name -->
    <p>{{ Form::label('firstName', 'First Name') }}</p>
    <p>{{ Form::text('firstName', Input::old('firstName')) }}</p>
    <?php if($errors) echo '<p class="error">'.$errors->first('firstName').'</p>'; ?>
    
    <!-- first name -->
    <p>{{ Form::label('lastName', 'Last Name') }}</p>
    <p>{{ Form::text('lastName', Input::old('lastName')) }}</p>
    <?php if($errors) echo '<p class="error">'.$errors->first('lastName').'</p>'; ?>
    
    <!-- email field -->
    <p>{{ Form::label('email', 'Email Address') }}</p>
    <p>{{ Form::text('email', Input::old('email')) }}</p>
    <?php if($errors) echo '<p class="error">'.$errors->first('email').'</p>'; ?>
    
    <!-- password field -->
    <p>{{ Form::label('password', 'Password') }}</p>
    <p>{{ Form::password('password') }}</p>
    <?php if($errors) echo '<p class="error">'.$errors->first('password').'</p>'; ?>

    <!-- confirm password field -->
    <p>{{ Form::label('password_confirmation', 'Confirm Password') }}</p>
    <p>{{ Form::password('password_confirmation') }}</p>
    <?php if($errors) echo '<p class="error">'.$errors->first('password_confirmation').'</p>'; ?>

    <!-- submit button -->
    <p>{{ Form::submit('signup', array('class' => 'alert button', 'onclick' => 'return validate()')) }}</p>
    {{ HTML::link(URL::base(), "Cancel") }}
    
{{ Form::close() }}