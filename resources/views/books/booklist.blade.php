 <html>

 <body>
     <main>
         <div>
             <table>
                 <thead>
                     <th>Id</th>
                     <th>Name</th>
                     <th>Author</th>
                     <th>Price</th>
                     <th>
                        <a href="{{ route('bookadd') }}">Add</a>
                     </th>
                     <th>
                        <a href="{{ route('bookprint') }}">Print All</a>
                     </th>
                 </thead>
                 <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->name }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->price }}</td>
                            <td><a href="{{ route('bookedit',['id' => $book->id]) }}">Eidt</a></td>
                        </tr>
                    @endforeach
                 </tbody>
             </table>

         </div>

     </main>
 </body>

 </html>
