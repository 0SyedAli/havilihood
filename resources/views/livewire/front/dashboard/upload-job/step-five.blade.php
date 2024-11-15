<div class="row">
    <div class="col-md-10 col-lg-8 col-xxl-6">
        <div>
            <h4 class="mb-2">Job description</h4>
            @error('description')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <div id="editor" >
                <textarea id="textarea" wire:model="description"></textarea>
            </div>

        </div>

        <div class="upload_pdf_docs">

            <input type="file" wire:model.live="document">
            <img src="{{asset('front/assets/images/upload_icon2.png')}}" alt="">
            <label for="">Upload a PDF or document</label>

        </div>
        @error('document')
        <small class="text-danger">{{$message}}</small>
        @enderror
        <p>You can easily upload a PDF document to upload your job details.</p>
    </div>
</div>

@script
<script>


    Livewire.on('rendered', () => {

        // Create new editor instance
        ClassicEditor.create(document.querySelector("#editor"))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    Livewire.dispatch('updateDescription', [editor.getData()]);
                });
                editor.setData(textarea.value);
            })
            .catch(error => console.error(error));
    });

</script>
@endscript
