@extends('frontend.layouts.app')

@section('title') {{ __("Posts") }} @endsection

@section('content')



<div class="row">
{{-- column 1 --}}
<div class="wrapper column pl-5 pt-5 mt-5 col-2 " style="position: sticky">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Pilihan Topik</h3>
        </div>

        <ul class="list-unstyled components list-group">
           
            <li class="list-group-item list-group-item-action border border-dark rounded mb-1">
                <a href="#" class="text-dark">Pemograman</a>
                {{-- <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Home</a>
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
                </ul> --}}
            </li>
            <li class="list-group-item list-group-item-action border border-dark rounded mb-1">
                <a href="#" class="text-dark">Pemograman</a>
            </li>
            <li class="list-group-item list-group-item-action border border-dark rounded mb-1">
                <a href="#" class="text-dark">Pemograman</a>
                {{-- <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
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
                </ul> --}}
            </li>
            <li class="list-group-item list-group-item-action border border-dark rounded mb-1">
                <a href="#" class="text-dark">Pemograman</a>
            </li>
            <li class="list-group-item list-group-item-action border border-dark rounded mb-1">
                <a href="#" class="text-dark">Pemograman</a>
            </li>
        </ul>
    </nav>

</div>
{{-- column 1 --}}

{{-- column 2 --}}
@if(count($$module_name))
<div class="column col-7">
<section class="section section-lg line-bottom-light">
    <div class="container">
        <div class="row">
            @php
            $$module_name_singular = $$module_name->shift();

            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp

            <div class="col-lg-12 mb-5">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    <a href="{{$details_url}}" class="col-md-6 col-lg-6">
                        <img src="{{$$module_name_singular->featured_image}}" alt="" class="card-img-top">
                    </a>
                    <div class="card-body d-flex flex-column justify-content-between col-auto py-4 p-lg-5">
                        <a href="{{$details_url}}">
                            <h2>{{$$module_name_singular->name}}</h2>
                        </a>
                        <p>
                            {{$$module_name_singular->intro}}
                        </p>
                        <div class="d-flex align-items-center">
                            <img class="avatar avatar-sm rounded-circle" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">

                            {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!}

                            <h6 class="text-muted small font-weight-normal mb-0 ml-auto"><time datetime="{{$$module_name_singular->published_at}}">{{$$module_name_singular->published_at_formatted}}</time></h6>
                        </div>
                    </div>
                </div>
            </div>

            @foreach ($$module_name as $$module_name_singular)
            @php
            $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded">
                    <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="card-img-top" alt=""></a>
                    <div class="card-body p-0 pt-4">
                        <a href="{{$details_url}}" class="h3">{{$$module_name_singular->name}}</a>
                        <div class="d-flex align-items-center my-4">
                            <img class="avatar avatar-sm rounded-circle" src="{{asset('img/avatars/'.rand(1, 8).'.jpg')}}" alt="">
                            {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!}
                        </div>
                        <p class="mb-3">{{$$module_name_singular->intro}}</p>
                        <a href="{{route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])}}" class="badge badge-primary">{{$$module_name_singular->category_name}}</a>
                        <p>
                            @foreach ($$module_name_singular->tags as $tag)
                            <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge badge-warning">{{$tag->name}}</a>
                            @endforeach
                        </p>
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
<div class="wrapper column pl-3 pt-5 mt-5">
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Artikel Trending</h3>
        </div>

        <div class="container-fluid border border-dark">
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
