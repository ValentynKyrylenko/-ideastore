               <div class="form-group">
				{!! Form::label('title', 'Название') !!}
				{!! Form::text('title', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
                {!! Form::label('body', 'Текст вашего объявления') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('condition', 'Состояние') !!}
                {!! Form::select('condition', array('N' => 'Новое состояние', 'O' => 'Было в употреблении', 'NO' => 'Отсутствует'), 'NO', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('location', 'Местонахождение') !!}
                {!! Form::text('location', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('post', 'Отправка') !!}
                {!! Form::select('post', array('S' => 'Самовывоз', 'P' => 'Отправка почтой', 'NO' => 'Отсутствует'), 'NO', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('price', 'Цена') !!}
                {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::file('image', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('published_at', 'Дата публиации') !!}
                {!! Form::input('date', 'published_at', $ad->published_at,['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                {!! Form::label('phone', 'Контактный номер') !!}
                {!! Form::text('phone', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                {!! Form::label('tagad_list', 'Рубрика') !!}
                {!! Form::select('tagad_list[]', $tagads, null,  ['id' => 'tagad_list', 'class' => 'form-control', 'multiple']) !!}
                </div>

                <div class="form-group">
                {!! Form::submit($submitButtonText,['class' => 'btn btn-primary form-control']) !!}
                </div>

