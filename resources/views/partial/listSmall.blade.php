<div class="mb-4">
    <b>{{$title." (".count($data).")"}}</b>
    <div class="row mt-2">
        @for ($i = 0; $i < (count($data) > 3 ? 3 : count($data)); $i++)
            <div class="col-2 mb-1">
                <a href="/member" class="no-style">
                    <div class="image-sm mb-1 clickable" style="background-image: url('/images/sample-photo.png')"></div>
                </a>
            </div>
        @endfor
        <div class="col-2 offset-1 d-flex align-content-center">
            @if (count($data) > 3)
                <div class="mt-3">
                    {{ count($data) - 3 }}+
                </div>
            @endif
        </div>
        <div class="col-3">
            @if ($redirect)
                <button class="mt-2 btn btn-info btn-sm">View</button>
            @endif
        </div>
    </div>
    @if (count($data) == 0)
        <div class="text-center text-muted">
            No Data Found
        </div>
    @endif
</div>