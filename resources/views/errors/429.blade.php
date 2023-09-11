@php
    // echo json response
    echo response()->json([
        'error' => 'Too Many Requests.'
    ], 429)->header('Content-Type', 'application/json')->content();
@endphp
