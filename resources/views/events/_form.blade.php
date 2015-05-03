               <div class="form-group">
				{!! Form::label('title', 'Название') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>
				<div class="form-group">
                {!! Form::label('body', 'Текст Статьи') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control', 'id' => 'editor1']) !!}
                </div>
                <div class="form-group">
                {!! Form::label('published_at', 'Дата публиации') !!}
                {!! Form::input('date', 'published_at', $event->published_at,['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
                </div>