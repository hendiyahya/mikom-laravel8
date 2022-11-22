@extends('frontend.layouts.app')

@section('title') {{ __("Posts") }} @endsection

@section('content')



<div class="row">
{{-- column 1 --}}
<div class="wrapper column pl-5 pt-5 mt-5 col-2" style="position: sticky">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h4>Pilihan Topik</h4>
        </div>

        <ul class="list-unstyled components list-group">
           
            <li class="list-group-item list-group-item-action border border-light shadow-soft rounded mb-1">
                <a href="#" class="text-dark">Pemrograman</a>
            </li>
            <li class="list-group-item list-group-item-action border border-light shadow-soft rounded mb-1">
                <a href="#" class="text-dark">Topik Skripsi</a>
            </li>
            <li class="list-group-item list-group-item-action border border-light shadow-soft rounded mb-1">
                <a href="#" class="text-dark">Magang</a>
            </li>
            <li class="list-group-item list-group-item-action border border-light shadow-soft rounded mb-1">
                <a href="#" class="text-dark">Tips & Trik</a>
            </li>
            <li class="list-group-item list-group-item-action border border-light shadow-soft rounded mb-1">
                <a href="#" class="text-dark">Tutorial</a>
            </li>
        </ul>
    </nav>

</div>
{{-- column 1 --}}

{{-- column 2 --}}
@if(count($$module_name))
<div class="column col-7">

    <section class="section section-lg line-bottom-light">
        <div class="container  rounde">
            <h4>Semua Artikel</h4>
            <div class="row mb-4">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 rounded" src="{{asset('img/gedung-isola-upi.jpg')}}" alt="First slide">
                            <div class="carousel-caption d-none d-md-block text-black">
                                <h5>Tips Memilih Topik Skripsi</h5>
                                <p>Topik skripsi merupakan hal yang saat ini diperlukan mahasiswa semester....</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded" src="{{asset('img/gedung-isola-upi.jpg')}}" alt="Second slide">
                            <div class="carousel-caption d-none d-md-block text-black">
                            <h5>Tips Memilih Topik Skripsi</h5>
                                <p>Topik skripsi merupakan hal yang saat ini diperlukan mahasiswa semester akhir......</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 rounded" src="{{asset('img/gedung-isola-upi.jpg')}}" alt="Third slide">
                            <div class="carousel-caption d-none d-md-block text-black">
                                <h5>Tips Memilih Topik Skripsi</h5>
                                <p>Topik skripsi merupakan hal yang saat ini diperlukan mahasiswa semester akhir......</p>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($$module_name as $$module_name_singular)
                @php
                $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
                @endphp
                <div class="col-12 col-md-4 mb-4 ">
                    <div class="card bg-white border-light shadow-soft rounded">

                        <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="card-img-top" alt=""></a>
                        <div class="card-body pt-4  p-4">
                            <a href="{{$details_url}}" class="h5">{{$$module_name_singular->name}}</a>
                            <div class="d-flex align-items-center my-4">
                            <img class="avatar avatar-sm rounded-circle" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">
                            {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!}
                            </div>
                            <!-- <p class="mb-3">{{$$module_name_singular->intro}}</p> -->
                            <!-- <a href="{{route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])}}" class="badge badge-primary">{{$$module_name_singular->category_name}}</a> -->
                            <!-- <p>
                                @foreach ($$module_name_singular->tags as $tag)
                                <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge badge-warning">{{$tag->name}}</a>
                                @endforeach
                            </p> -->
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center w-100 mt-3">
                {{$$module_name->links()}}
            </div>
        </div>
    </section>
</div>
@endif
{{-- column 2 --}}

{{-- column 3 --}}
<div class="wrapper column pl-3 pt-5 mt-5 col-3">
    <!-- Sidebar -->
    <nav id="sidebar mr-2">
        <div class="sidebar-header">
            <h4>Artikel Trending</h4>
        </div>

        <!-- <div class="container-fluid border border-dark">
            <div class="row">
                <div class="">
                    <div class="card">
                        <div style="display: flex;
                        flex: 1 1 auto;">
                            <div class="img-square-wrapper">
                                <img class="" src="http://via.placeholder.com/300x180" alt="Card image cap">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">Card title</h4>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row h-25">
                @foreach ($$module_name as $$module_name_singular)
                @php
                $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
                @endphp
                <div class="col-12 mb-1">
                    <div class="card bg-white border-light shadow-soft rounded">
                        <div class="row">
                            <div class="col">
                                <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="rounded" alt=""></a>
                            </div>
                            <div class="col">
                            <div class="card-body p-0 py-1">
                                <a href="{{$details_url}}" class="h6">{{$$module_name_singular->name}}</a>
                                <div class="d-flex align-items-center">
                                {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!}
                            </div>
                        </div>
                            </div>
                        </div>

                        
                        
                    </div>
                </div>
                @endforeach
            </div>

        {{-- <ul class="list-unstyled components">
           
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Home 1</a>
                    </li>
                    <li>
                        <a href="#">Home 2</a>
                    </li>
                    <li>
                        <a href="#">Home 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">About</a>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Portfolio</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
        </ul> --}}
    </nav>

</div>
{{-- column 3 --}}
</div>








@endsection
