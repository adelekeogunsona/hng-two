@php
    // echo json response
    echo response()->json([
        'error' => 'Unauthorized.'
    ], 401)->header('Content-Type', 'application/json')->content();
@endphp
