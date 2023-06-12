<div>
    @foreach ($task as $a)
        <div class="card">
            <div class="card-header bg-info">
                <strong class="text-light">Data Terbaru</strong>
            </div>
            <div class="card-body">
                <h5 class="card-title">{{ $a->nama }}</h5>
                <h5 class="card-title">{{ $a->judul }}</h5>
                <p class="card-text">{{ $a->deskripsi }}</p>
            </div>
        </div>
    @endforeach
</div>
