@php
    // echo json response
    echo response()->json([
        'error' => 'Page Expired.'
    ], 419)->header('Content-Type', 'application/json')->content();
@endphp
