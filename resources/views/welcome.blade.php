@extends('layouts.app')

@section('content')

<div class="flex-center position-ref full-height">



    <div class= "content">
        <div>
            <img src="/img/pizza-house.png" alt="pizza house logo" style="width: 80%">
        </div>
        <div class="title m-b-md">
            The Best Pizza in Dar es Salaam
        </div>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="/pizzas/create">Order a Pizza</a>
        
    </div>
</div>
<!-- Success Modal -->
@if(session('mssg'))
<div class="modal fade" id="orderSuccessModal" tabindex="-1" aria-labelledby="orderSuccessModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="orderSuccessModalLabel">Order Confirmed</h5>
            </div>
            <div class="modal-body">
                <p>{{ session('mssg') }}</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endif

@endsection    

@section('scripts')
<script>
    @if(session('mssg'))
        var myModal = new bootstrap.Modal(document.getElementById('orderSuccessModal'));
        myModal.show();
    @endif
</script>
@endsection
