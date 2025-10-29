@extends('layouts.frontendlayouts')

@section('content')
<section class="py-5 bg-light">
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 70vh;">
        <div class="card shadow-lg border-0 p-5 text-center" style="max-width: 550px; border-radius: 15px;">
            
            <div class="mb-4">
                <iconify-icon icon="mdi:check-circle" style="color: #28a745; font-size: 70px;"></iconify-icon>
            </div>
            
            <h2 class="fw-bold mb-3 text-success">Payment Successful!</h2>
            <p class="text-muted mb-4">Thank you for your purchase. Your payment has been processed successfully.</p>

            <div class="border rounded p-3 mb-4 bg-white">
                <p class="mb-2"><strong>Transaction ID:</strong> {{ $tran_id }}</p>
                <p class="mb-2"><strong>Amount:</strong> {{ $amount }} {{ $currency }}</p>
                <p class="mb-0"><strong>Status:</strong> <span class="text-success">Completed</span></p>
            </div>

            <a href="{{ url('/') }}" class="btn btn-success px-4 py-2 rounded-pill">
                <iconify-icon icon="mdi:home-outline" width="20"></iconify-icon> Back to Home
            </a>
        </div>
    </div>
</section>

<!-- Iconify Script -->
<script src="https://code.iconify.design/iconify-icon/2.3.0/iconify-icon.min.js"></script>
@endsection
