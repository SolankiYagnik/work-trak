@extends('user.layouts.app')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div id="card-headers" class="card-header btn-background">
              <h4 class="card-title">Notifications</h4>
            </div>
            <div class="card-nody">
                @foreach ($notifications as $notification)
                @if ($notification->type == 'App\Notifications\UserAddLeadNotification')
                    A new lead added by 
                    <strong>
                        {{ $notification->data['name'] }}
                    </strong>
                    <a href="{{ route('index') }}" class="btn float-right btn-sm btn-info">View Lead</a>
                @endif

                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection