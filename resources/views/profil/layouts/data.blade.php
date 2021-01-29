@foreach ($messages as $message)	
 

             <div class="resume-item d-flex flex-column flex-md-row justify-content-between mb-5">
                    <div class="resume-content">
                    <form action="{{ route('deleteMessage') }}" method='POST' >
                    @csrf
                    <input id="id" name="id" type="hidden" value="{{$message->id}}">
                    <button type="submit" title="Supprimer"
                        class="btn btn-primary btn-sm">x</button></li>
                        </form>
                 <h5 class=" text-body">DE LA PART DE   : <h3 class=" text-primary">{{$message->name}}</h3></h5>
                  <h5 class=" text-body">Objet : <span class="number text-primary">{{$message->objet}}</span></h5>  
                      <div class="subheading mb-3">Adresse Email : {{$message->email}} <span class="text-body">| Reçu le {{ date(" j M Y, à H\hi", strtotime($message->updated_at))}} </span>
                    </div>
                    <hr>
                    <p>{{$message->message}}</p>
                     <br>
                     
                     <hr>
                </div>
                </div>
            @endforeach
