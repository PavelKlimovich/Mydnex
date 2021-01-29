@foreach ($articles as $article)	
            <div class="col-md-12 d-flex ">
              <div class="blog-entry align-self-stretch d-md-flex">
                <a href="{{ url('blog') }}/{{$article->slug}}" class="block-20" style="background-image: url({{url("$article->image")}});"></a>
                 <div class="text d-block pl-md-4">
                    <div class="meta mb-4">
                    
                      <h3 class="heading"><a href=" {{ url('blog') }}/{{$article->slug}} ">{{$article->title}}</a></h3>
                       <div><p>{{ date(" j M Y, à H\hi", strtotime($article->updated_at))}}</p></div>
                      <hr>
                    </div>
                    <p>{{$article->texte}}</p>
                    <p><a href=" {{ url('blog') }}/{{$article->slug}} " class="btn btn-primary py-2 px-3">LIRE L'ARTICLE</a></p>
                     <br>
                </div>
                </div>
            </div> 
            
            @endforeach