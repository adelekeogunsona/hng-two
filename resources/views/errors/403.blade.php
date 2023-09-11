@php
    // echo json response
    echo response()->json([
        'error' => 'Forbidden.'
    ], 403)->header('Content-Type', 'application/json')->content();
@endphp
