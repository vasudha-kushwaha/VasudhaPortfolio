@extends('tasks.tasklayout.main')

@section('main-taskcontainer')
<h2>QR Code</h2>
{!!
    QrCode::generate('vasudhakushwaha.in')
!!}
<br><br>
{!!
    QrCode::size(200)->generate('vasudhakushwaha.in')
!!}
<br><br>
{!!
    QrCode::size(200)->backgroundcolor(120, 200, 5)->generate('vasudhakushwaha.in')
!!}
<br><br>
{!!
    QrCode::format('png')->size(200)->backgroundcolor(120, 200, 5)->generate('vasudhakushwaha.in', storage_path('TaskData/Code'. time() . '.png'))
!!}
<br>
@endsection