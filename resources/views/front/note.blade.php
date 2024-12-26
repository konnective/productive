
@push('custom-css')
    <style>
        /* Additional custom CSS */
        .sidebar{
            height: 100vh;
        }
        .content_wrapper{
            height: 100vh;
            overflow-y: auto;
        }
        .content_wrapper img{
            height: 500px;
        }
    </style>
@endpush
{{--  --}}
{{--  --}}
<x-layout>
    <div class="col-12 text-center">
        <div class="row">
            <div class="col-2 sidebar border-end">
                <ul class="list-unstyled mt-3 fs-3">
                    <li>this</li>
                    <li>this</li>
                    <li>this</li>
                    <li>this</li>
                    <li>this</li>
                </ul>
            </div>
            <div class="col-10 content_wrapper border-top">
                <h2 class="float-start">{{$note->title}}</h2>
                <div class="row">
                    <div class="col-8 border-end">
                        <img src="{{asset('images/home.png')}}" alt="">
                        <p>{{$note->details}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>