@extends('layouts.admin')

@section('panel')
<div class="row">
    <div class="col-lg-12">
      <div class="main-card mb-3 card">
        <div class="card-header">
            <ul class="nav nav-justified">
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-0" class="active nav-link">Tab 1</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-1" class="nav-link">Tab 2</a></li>
                <li class="nav-item"><a data-toggle="tab" href="#tab-eg7-2" class="nav-link">Tab 3</a></li>
            </ul>
        </div>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane active" id="tab-eg7-0" role="tabpanel"><p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker
                    including versions of Lorem Ipsum.</p></div>
                <div class="tab-pane" id="tab-eg7-1" role="tabpanel"><p>Like Aldus PageMaker including versions of Lorem. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                    essentially unchanged. </p></div>
                <div class="tab-pane" id="tab-eg7-2" role="tabpanel"><p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
                    type specimen book. It has
                    survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p></div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection
