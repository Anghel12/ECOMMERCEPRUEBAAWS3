<div class="container">
    <div class="row">
        <div class="col">
            <div class="image-wrapper">
    
               
                @isset($slider->image)
                   
                   <img id="picture" src="{{Storage::url($slider->image->url)}}">
                    <img id="picture" src="{{$slider->image->url}}">
                @else
    
                <img id="picture" src="https://cdn.pixabay.com/photo/2022/09/04/12/24/hippos-7431581_960_720.jpg">
    
                
                 @endisset
                
            </div>
            
        </div>
    
        <div class="col">
            <div class="form-group">
                {!! Form::label('file', 'Imagen que se mostrara en el post') !!}
                {!! Form::file('file', ['class' =>'form-control-file', 'accept' => 'image/*']) !!}
            </div>
        </div>
    
        @error('file')
        <hr>
        <span class="text-danger"> {{$message}} </span>
        @enderror 
    
        </div>
    
        <div class="form-group">
            
            {!! Form::label('title', 'TITULO DEL SLIDER:') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
        
            @error('title')
            <span class="text-danger"> {{$message}} </span>
        @enderror  
        <div class="form-group">
            {!! Form::label('body', 'CONTENIDO DEL SLIDER:') !!}
            {!! Form::text('body', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del Post']) !!}
        
            @error('body')
            <span class="text-danger"> {{$message}} </span>
        @enderror  
    
    </div>