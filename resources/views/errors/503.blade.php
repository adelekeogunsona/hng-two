@php
    // echo json response
    echo response()->json([
        'error' => 'Service Unavailable.'
    ], 503)->header('Content-Type', 'application/json')->content();
@endphp
