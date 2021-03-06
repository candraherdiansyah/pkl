<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    @foreach ($article ?? '' as $data)
        {{ $data->title }} -
        {{ $data->created_at->format('d M Y') }}<br>
    @endforeach

    <form action="{{ route('printReport') }}" method="post">
        <input type="hidden" name="tanggalAwal" value="{{ $start }}">
        <input type="hidden" name="tanggalAkhir" value="{{ $end }}">
        @csrf
        total penulis : {{ $total_pengguna->total_pengguna }}
        <br><button type="submit">Export PDF</button>
    </form>
</body>

</html>
