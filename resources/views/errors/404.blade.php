@php
    // echo json response
    echo response()->json([
        'error' => 'Resource not found.'
    ], 404)->header('Content-Type', 'application/json')->content();
@endphp
