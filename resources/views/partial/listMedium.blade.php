<div class="mb-4">
    <b>{{$title}}</b>
    <div class="row mt-2">
        @foreach ($data as $item)
            <div class="col-4 mb-1">
                <a href="/member" class="no-style">
                    <div class="image-md mb-1 clickable" style="background-image: url('/images/sample-photo.png')"></div>
                    <div class="text-medium">{{$item->name}}</div>
                    @if ($title == 'Parents')
                        <div class="text-muted text-small">{{$item->gender == 'L'? 'Husband' : 'Wife'}}</div>
                    @endif
                </a>
            </div>
        @endforeach
    </div>
    @if (count($data) == 0)
        <div class="text-center text-muted">
            No Data Found
        </div>
    @endif
</div>