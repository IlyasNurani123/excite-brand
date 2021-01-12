<div class="container-fluid">
    <div class="row">
     <div class="col-sm-12 md-6 text-center">
       @if (session()->has('message'))
       <div class="alert {{ Session::get('alert-class') }}" role="alert">
         <a href="#" class="close mdi mdi-window-close" data-dismiss="alert" aria-label="close" ></a>
            <p class="blockquote">{{session('message')}}</p>
        </div>
     @endif
     </div>
   </div>
   <div class="row">
       <div class="col-md-12">
           <div class="card">
               <div class="card-body">
                <h4 class="card-title">Services form</h4>
                   <form class="form-horizontal" wire:submit.prevent="updateOrStoreTestimonial" >
                    <div class="row">
                        @csrf
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="form-group">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <label for="validationServer01" class="col-form-label"> Client Name </label>
                                    <input type="text" wire:model="name" class="form-control" id="validationServer01"  placeholder="name Here" required>
                                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-6 col-md-6 col-lg-6">
                       <div class="form-group row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                         <label for="validationServer01" class="col-form-label"> Site Link </label>
                            <input type="text" wire:model="link" class="form-control" id="validationServer01" placeholder="please Add link" >
                            @error('link') <span class="text-danger">{{ $message }}</span>@enderror
                        </div>
                    </div>
                    </div>
                    </div>  
                    <div class="row">
                        <div class="col-sm-12 col-mg-12 col-md-12">
                            <div class="form-group row" wire:ignore>
                                <div class="col-sm-12 col-md-12 col-lg-12" id="editor">
                                    <label for="description" class="control-label col-form-label">Testimonial</label>
                                    <textarea
                                    class="form-control"
                                    id="testimonial"
                                    wire:model.debounce.9999999ms="review"
                                    rows="8"
                                ></textarea>
                                    @error('review') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>
                    </div>
                   </div>
                   <div class="border-top">
                       <div class="card-body row">
                           <div class="col-sm-9 col-md-11 col-lg-11 text-right"> 
                           <button type="submit" class="btn btn-primary">Submit</button>
                       </div>
                   </div>
                   </div>
               </form>
           </div>
       </div>
   </div>
</div>

@push('scripts')
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
<script>
   // var options={
   //     filebrowserBrowseUrl: '/browser/browse.php',
   //     filebrowserUploadUrl: '/uploader/upload.php'
   // }
CKEDITOR.replace('testimonial').on('change',function(e){
   @this.set('testimonial',e.editor.getData())
});
// CKEDITOR.replace('mytextarea',options)
</script>
@endpush

