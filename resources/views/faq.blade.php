@extends('layouts.frontend')

@section('breadcrumb')
  @includeIf('layouts.breadcrumb', ['title' => 'FAQs' , 'subtitle' => 'Frequently Asked Questions'])
@endsection

@section('main-content')
<div class="faq faq-page pb-120">
    <div class="container">


        <div class="row">
            
            <div class="col-md-12">
               
                <div id="accordion" class="acco">

                    @foreach($datas as $data)
                    
                    <div class="card">
                    <div class="card-header" id="heading-{{ $loop->iteration }}">
                      <h5 class="mb-0">
                        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse-{{ $loop->iteration }}" aria-expanded="false" aria-controls="collapse-{{ $loop->iteration }}">
                          {{ $data->question }}
                        </button>
                      </h5>
                    </div>
                    <div id="collapse-{{ $loop->iteration }}" class="collapse" aria-labelledby="heading-{{ $loop->iteration }}" data-parent="#accordion">
                      <div class="card-body">
                        {{ $data->answer }}
                      </div>
                    </div>
                  </div>

                  @endforeach
                   
                </div>
    
            
            </div>
        
        </div>
    
    </div>
    
</div>    
@endsection