
<div class="form-group">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        <textfield>
            {!! Form::label('body', 'Body:') !!}
            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
        </textfield>
    </div>
  
    <div class="form-group">
            {!! Form::submit($SubmitButtonText, ['class' => 'btn btn-primary form-control']) !!}
    </div>
