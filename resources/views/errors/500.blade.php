@php
    // echo json response
    echo response()->json([
        'error' => 'Internal Server Error.'
    ], 500)->header('Content-Type', 'application/json')->content();
@endphp
