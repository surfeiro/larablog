




        @csrf
    
        <div class="form-group">
            <label for="title">Título</label>
            <input class="form-control"type="text" name="title" id="title" value="{{old('title',$category->title)}}">


        </div>
    
        <div class="form-group">
            <label for="url_clean">Url Limpia</label>
            <input class="form-control"type="text" name="url_clean" id="url_clean" value="{{old('url_clean',$category->url_clean)}}">
        </div>

    
          <button type="submit" class="btn btn-primary">Confirm identity</button>
          <input type="submit" value="Enviar" class="btn btn-primary">


