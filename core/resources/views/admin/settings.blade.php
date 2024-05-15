@extends('layouts.front_layout')
@section('title')
    Settings
@endsection 
@section('content')

 <div class="card">
    <form action="{{ route('settings.update') }}" method="POST" enctype="multipart/form-data">
     @csrf
      @if ($setting->count() >= 1)
        <div class="card-header">
            <h5>Optimization Setting</h5>
        </div>
        <div class="card-body">
            <div class="row">
                
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Open Hour</label>
                      <input type="time"
                        class="form-control" name="open" value="{{ $set->active_hour }}" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Optimization opening hour</small>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Close Hour</label>
                      <input type="time"
                        class="form-control" value="{{ $set->close_hour }}" name="close" id="" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Optimization closing hour</small>
                    </div>
                </div>
              
            </div>
        </div>
        
        <Div class="card-header">
            <h5>Certificate</h5>
        </div>
          <div class="card-body">
            <div class="row">  
                       
               <div class="col-sm-6">
                 <div class="mb-3">
                    <label for="" class="form-label">Letter of Authorization</label>
                    <input type="file" class="form-control" name="letter">               
                    <Image src="{{ asset( $set->letter ) }}" width="100" />
                  </div>
               </div>
               
               
               <div class="col-sm-6">
                 <div class="mb-3">
                    <label for="" class="form-label">Certificate</label>
                    <input type="file" class="form-control" name="cert">                                
                    <Image src="{{ asset( $set->cert ) }}" width="100" />
                 </div>
              </div>
               
            </div>
          </div>
        
        <div class="card-header">
            <h5>Other Setting</h5>
        </div>

        <div class="card-body">
            <div class="row">
                
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Referal commission</label>
                      <input type="number" step="0.01"
                        class="form-control" name="ref" value="{{ $set->ref_amount }}" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Optimization referal commission</small>
                    </div>
                </div>
                
                <div class="col-6">
                    <div class="mb-3">
                      <label for="" class="form-label">Minimum Withdrwal</label>
                      <input type="number" step="0.01"
                        class="form-control" name="amount" value="{{ $set->min_withdrawal }}" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">set minimum withdrawal, leave blank to set as $0</small>
                    </div>
                </div>
              
            </div>
            <div>
                <div class="mb-3">
                  <label for="" class="form-label">WhatsApp Support Number</label>
                  <input type="text"
                    class="form-control" name="chat" value="{{ $set->chat }}" aria-describedby="helpId" placeholder="https://api.whatsapp.com/send?phone=+187535678">
                  <small id="helpId" class="form-text text-muted">Enter phone number without "+" sign. e.g. for "+234896****" just input "234896****"</small>
                </div>
            </div>
        </div>

        <div class="card-header">
          <h5>
            Terms & condition
          </h5>
        </div>

        <div class="card-body">
          <div class="mb-3">
            {{-- <label for="" class="form-label">Terms & condition</label> --}}
            <textarea class="form-control" name="terms" id="editor" rows="5">{{ $set->term }}</textarea>
          </div>
        </div>
        
        <div class="card-header">
            <h5>
              About Us
            </h5>
          </div>

          <div class="card-body">
            <div class="mb-3">
              {{-- <label for="" class="form-label">About Us</label> --}}
              <textarea class="form-control" name="about" id="about" rows="5">{{ $set->about }}</textarea>
            </div>
          </div>
        
        @else
          <div class="card-header">
              <h5>Optimization Setting</h5>
          </div>
          <div class="card-body">
              <div class="row">
                  
                  <div class="col-6">
                      <div class="mb-3">
                        <label for="" class="form-label">Open Hour</label>
                        <input type="time"
                          class="form-control" name="open" value="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Optimization opening hour</small>
                      </div>
                  </div>
                  
                  <div class="col-6">
                      <div class="mb-3">
                        <label for="" class="form-label">Close Hour</label>
                        <input type="time"
                          class="form-control" value="" name="close" id="" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Optimization closing hour</small>
                      </div>
                  </div>
                
              </div>
          </div>
          
          <div class="card-header">
              <h5>Other Setting</h5>
          </div>

          <div class="card-body">
              <div class="row">
                  
                  <div class="col-6">
                      <div class="mb-3">
                        <label for="" class="form-label">Referal commission</label>
                        <input type="number" step="0.01"
                          class="form-control" name="ref" value="0" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">Optimization referal commission</small>
                      </div>
                  </div>
                  
                  <div class="col-6">
                      <div class="mb-3">
                        <label for="" class="form-label">Minimum Withdrwal</label>
                        <input type="number" step="0.01"
                          class="form-control" name="amount" value="0" aria-describedby="helpId" placeholder="">
                        <small id="helpId" class="form-text text-muted">set minimum withdrawal, leave blank to set as $0</small>
                      </div>
                  </div>
                
              </div>
              
              <div>
                <div class="mb-3">
                  <label for="" class="form-label">WhatsApp Support Number</label>
                  <input type="text"
                    class="form-control" name="chat" value="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Enter phone number without (+) sign. e.g. for "+234896****" just input "234896****"</small>
                </div>
            </div>
          </div>

          <div class="card-header">
            <h5>
              Terms & condition
            </h5>
          </div>

          <div class="card-body">
            <div class="mb-3">
              {{-- <label for="" class="form-label">Terms & condition</label> --}}
              <textarea class="form-control" name="terms" id="editor" rows="5"></textarea>
            </div>
          </div>
          
          
          <div class="card-header">
            <h5>
              About Us
            </h5>
          </div>

          <div class="card-body">
            <div class="mb-3">
              {{-- <label for="" class="form-label">About Us</label> --}}
              <textarea class="form-control" name="about" id="about" rows="5"></textarea>
            </div>
          </div>
        
      @endif


        <div class="card-footer">
            <button class="btn btn-success" type="submit">Update</button>
        </div>
    </form>
 </div>

@endsection
