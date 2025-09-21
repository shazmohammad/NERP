 <html>

 <body>
     <main>
         <div>
             <form method="POST" action="{{ route('bookadd') }}">
                 @csrf
                 <div>
                     <label for="name">Book Name</label>
                     <input type="text" name="name" id="name" value="{{ old('name') }}"
                         class="@error('name') is-invalid @enderror">
                 </div>
                 <div>
                     <label for="author">Author</label>
                     <input type="text" name="author" id="author" value="{{ old('author') }}"
                         class="@error('author') is-invalid @enderror">
                 </div>
                 <div>
                     <label for="price">Price</label>
                     <input type="number" name="price" id="price" value="{{ old('price') }}"
                         class="@error('price') is-invalid @enderror">
                 </div>
                 <button type="submit">Submit</button>
             </form>

         </div>

     </main>
 </body>

 </html>
