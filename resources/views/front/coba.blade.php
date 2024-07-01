<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    <title>Carousel Example</title>
</head>
<body>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        @foreach ($data->chunk(10) as $chunk)
            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <div class="container">
                    @foreach ($chunk as $item)
                        <!-- Gantilah dengan data sesuai dengan struktur model Anda -->
                        <p>{{ $item->judul }}</p>
                        <p>{{ $item->penerbit }}</p>
                        <!-- ... -->
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Tampilkan Pagination -->
<div class="d-flex justify-content-center mt-4">
    {{ $data->links() }}
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-e2f7kqVQ5u1uK6ZkFJWiEZX2PR9FNPgge4FZh0Uu5L3L4E1biJSx6sohpiG0Se8D" crossorigin="anonymous"></script>
</body>
</html>
