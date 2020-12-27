 @extends('layouts.portal')

@section('content')

<div class="container-fluid pb-video-container">
    <div class="col-md-12 offset-md-1">
        <h3 style="text-align: center;">Croydon Video Gallery</h3>
        
        <div class="row pb-row">
        	@foreach($videos as $video)
            <div class="col-lg-6 pb-video">

                <iframe class="pb-video-frame" width="100%" height="230" src="{{$video->url}}" frameborder="0" allowfullscreen></iframe>
                <label class="form-control label-warning text-xs-center">{{$video->title}}</label>
            </div>
            @endforeach
        </div>
        
    </div>
</div>

<style>
    .pb-video-container {
        padding: 45px;
        background: #ffffff;
        font-family: Lato;
    }

    .pb-video {
        border: 1px solid #e6e6e6;
        padding: 5px;
    }

        .pb-video:hover {
            background: #2c3e50;
        }

    .pb-video-frame {
        transition: width 2s, height 2s;
    }

        .pb-video-frame:hover {
            height: 300px;
        }

    .pb-row {
        margin-bottom: 10px;
    }
</style>


@endsection