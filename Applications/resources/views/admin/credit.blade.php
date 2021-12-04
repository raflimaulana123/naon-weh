@extends('layouts.admin.app')
@section('content')

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1> {{ $tittle }}</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Layout</a></div>
              <div class="breadcrumb-item">Default Layout</div>
            </div>
          </div>

          <div class="section-body">
            <h2 class="section-title">{{ $tittle }}</h2>
            <p class="section-lead">Welcome Back.</p>
            <div class="card">
              <div class="card-header">
                <h4>{{ $tittle }}</h4>
              </div>
              <div class="card-body">
                <p>{{ $body }}</p>
              </div>
              <center><div class="card-footer bg-whitesmoke">
                Copyright @Rafli 2021
              </div></center>
            </div>
          </div>
        </section>
      </div>

@endsection
