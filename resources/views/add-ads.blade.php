<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            hatif
        </h2>
    </x-slot>

    <section class="advt-post bg-gray py-5">
        <div class="container">
          <form action="{{ route('annonces.store') }}" method="POST">
            @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary px-3 px-md-4 py-4 mb-5">
              <div class="row">
                <div class="col-lg-12">
                  <h3>Post Your ad</h3>
                </div>
                <div class="col-lg-6">
                  <h6 class="font-weight-bold pt-4 pb-1">Title Of Ad:</h6>
                  <input type="text" name="title" class="form-control bg-white" placeholder="Ad title go There" required>

                  <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                  <select name="marque_id" class="form-control w-100 bg-white" id="inputGroupSelect" required>
                    <option value="">Select Mark</option>
                    <option value="1">iphone</option>
                  </select>
                  <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                  <select name="modele_id" class="form-control w-100 bg-white" id="inputGroupSelect" required>
                    <option value="">Select model</option>
                    <option value="1">14</option>
                  </select>
                  <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                  <select name="ville_id" class="form-control w-100 bg-white" id="inputGroupSelect" required>
                    <option value="">Select city</option>
                    <option value="1">casablanca</option>
                  </select>

                  <h6 class="font-weight-bold pt-4 pb-1">Price:</h6>
                  <input type="text" name="prix" class="form-control bg-white" placeholder="Price" id="prix" required>
                  
                </div>


                <div class="col-lg-6">
                    <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                    <textarea name="description" id="description" class="form-control bg-white" rows="7"
                        placeholder="Write details about your product" required></textarea>
                  
                  <div class="choose-file text-center my-4 py-4 rounded bg-white">
                    <label for="file-upload">
                      <span class="d-block font-weight-bold text-dark">Drop files anywhere to upload</span>
                      <span class="d-block">or</span>
                      <span class="d-block btn bg-primary text-white my-3 select-files">Select files</span>
                      <span class="d-block">Maximum upload file size: 500 KB</span>
                      <input type="file" class="form-control-file d-none" id="file-upload" name="file">
                    </label>
                  </div>
                  <button type="submit" name="submit" class="btn btn-primary btn-block d-block mt-2">Post Your Ad</button>
                </div>
              </div>
            </fieldset>
            <!-- Post Your ad end -->
      
            <!-- submit button -->
            <div class="checkbox d-inline-flex d-none">
              <input type="checkbox" id="terms-&-condition" class="mt-1">
              <label for="terms-&-condition" class="ml-2">By click you must agree with our
                <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting
                    Rules.</a></span>
              </label>
            </div>
            
          </form>
        </div>
      </section>
</x-app-layout>
