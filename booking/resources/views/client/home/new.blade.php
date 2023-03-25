@extends('layout')
@section('content')
<section class="section bg-white" id="news">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center mb-5">
                    <div class="small-title">Blog</div>
                    <h4>Latest News</h4>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            @foreach ($new as $news )
            <div class="col-xl-4 col-sm-6">
                <div class="blog-box mb-4 mb-xl-0">
                    <div class="position-relative">
                        <img src="{{ Storage::url('images/' . $news->image) }}" alt="" class="rounded img-fluid mx-auto d-block">
                        <div class="badge badge-success blog-badge font-size-11">Cryptocurrency</div>
                    </div>

                    <div class="mt-4 text-muted">
                        <p class="mb-2"><i class="bx bx-calendar mr-1"></i> {{ $news->created_at }}</p>
                        <h5 class="mb-3">{{ $news->title }}</h5>
                        <p>{!! $news->detail !!}</p>

                        <div>
                            <a href="#">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>
@endsection
