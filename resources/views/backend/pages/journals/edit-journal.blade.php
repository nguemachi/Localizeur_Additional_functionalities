@extends('backend.layout.app')

@section('page_title','MODIFIER JOURNAL')

@section('content')



    <div class="card border card-border-primary">
        <div class="card-header">
            The Elements with * are mandatory!!!!!
        </div>

        <div class="card-body">

            <div class="row"></div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="">
                        <form method="post" action="{{ route('admin_update_journal_page',[app()->getLocale(),$post->id]) }}" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mb-4">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" type="file" id="formFile" name="banner">
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Titre <span style="color: red">*</span></label>
                                <input type="text" placeholder="Titre" id="title_fr" class="form-control" value="{{$post->title_fr}}" name="title_fr">
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Auteur <span style="color: red">*</span></label>
                                <input type="text" placeholder="Auteur" id="author" class="form-control" value="{{$post->author}}" name="author">
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Adresse <span style="color: red">*</span></label>
                                <input type="text" placeholder="Adresse" id="adresse" value="{{$post->address}}" class="form-control" name="address">
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Email<span style="color: red">*</span></label>
                                <input type="text" placeholder="Courriel" id="email" value="{{$post->email}}" class="form-control" name="email" >
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Phone Number<span style="color: red">*</span></label>
                                <input type="text" placeholder="Telephone" id="phonenumber" value="{{$post->phonenumber}}" class="form-control" name="phonenumber" >
                            </div>

                            <div class="form-group mb-4">
                                <label for="title_fr">Entreprise<span style="color: red">*</span></label>
                                <input type="text" placeholder="Entreprise" id="entreprise" class="form-control" value="{{$post->entreprise_name}}" name="enterprise_name" >
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Courte Description du Journal <span style="color: red">*</span></label>
                                <textarea  id="short_description_fr" class="form-control" name="short_description_fr" rows="5">
                            {{$post->short_description_fr}}
                            </textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Categorie <span style="color: red">*</span></label>
                                <select class="form-select mb-3" name="category_id" aria-label="Default select example">
                                    @foreach($categories as $category)
                                        @if($post->category_id == $category->id)
                                            <option value="{{$category->id}}" selected>{{$category->name_fr}}</option>
                                        @else
                                            <option value="{{$category->id}}">{{$category->name_fr}}</option>
                                        @endif

                                    @endforeach


                                </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="short_description_fr">Tags <span style="color: red">*</span></label>
                                <select class="form-select mb-3" multiple name="tags[]"
                                        aria-label="multiple Default select example">
                                    @foreach($tags as $tag)
                                        <option value="{{$tag->id}}">{{$tag->name_fr}}</option>
                                    @endforeach


                                </select>
                            </div>

                            <div class="form-group mb-4">
                                <label for="status">Statut <span style="color: red">*</span></label>
                                <select class="form-select mb-3" name="status" aria-label="Default select example">
                                    @if($post->status == 1)
                                        <option value="1" selected>Actif</option>
                                        <option value="0">Inactif</option>
                                    @else
                                        <option value="1" >Actif</option>
                                        <option value="0" selected>Inactif</option>
                                    @endif


                                </select>
                            </div>



                            <div class="form-group mb-4">
                                <label for="">Contenu <span style="color: red">*</span></label>
                                <textarea class="ckeditor form-control" name="description_fr"  >{{$post->description_fr}}"</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <button type="submit" class="form-control btn btn-primary ">Modifier</button>
                            </div>

                        </form>
                    </div><!-- end card -->
                </div>
                <!-- end col -->
            </div>

        </div>



    </div>

    <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
