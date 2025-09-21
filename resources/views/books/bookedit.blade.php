 <html>

 <body>
     <main>
         <div>
            <h1>Edit Books</h1>
             <form action="{{ route('bookedit',['id' =>$book->id]) }}" method="POST">
                @csrf
                 <div>
                     <label for="name">Book Name</label>
                     <input type="text" name="name" id="name" value="{{ old('name') ?? $book->name }}"
                class="@error('name') is-invalid @enderror">
                 
                 </div>
                 <div>
                     <label for="author">Author</label>
                     <input type="text" name="author" id="author" value="{{ old('name') ?? $book->author }}"
                class="@error('author') is-invalid @enderror">
                 </div>
                 <div>
                     <label for="price">Price</label>
                     <input type="number" name="price" id="price" value="{{ old('name') ?? $book->price }}"
                class="@error('price') is-invalid @enderror">
                 </div>

                 <input type="submit">
                 
             </form>


         </div>

     </main>
 </body>

 </html>
