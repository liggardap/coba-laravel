@extends('Layouts.app')

@section('container')
{{--<h1>Halaman About Us</h1>--}}
{{--<h3>Liggar Dicky Ardy Prayoga</h3>--}}
{{--<h3><?php echo $name ?></h3>--}}
{{--<h3><?= $name ?></h3>--}}
<h3>{{ $name }}</h3> {{-- blade templating engine--}}
{{--<p>liggardap@gmail.com</p>--}}
{{--<p><?php echo $email ?></p>--}}
{{--<p><?= $email ?></p>--}}
<p>{{ $email }}</p>
{{--<img src="https://i.pinimg.com/564x/18/53/66/185366757d3dba63fbe71f702e441473.jpg" class="img-thumbnail rounded" alt="liggar.jpg">--}}
{{--<img src="<?= $image ?>" class="img-thumbnail rounded" alt="<?= $name ?>">--}}
<img src="{{ $image }}" class="img-thumbnail rounded" alt="{{ $name }}">
@endsection
