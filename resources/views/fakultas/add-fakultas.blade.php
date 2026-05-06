<x-layout>
    <form action="/fakultas" method="post">
        @csrf
        <div> class="form-group">
            <input
            name="nama_fakultas"
            type="text"
            placeholder="nama fakultas"
            class="form-group">
            >
        <div> class= "form group">
            <input
            name="nama_dekan"
            type="text"
            placeholder="nama dekan"
            class="form-control">
            >
           <div>   
           <button type ="submit" class= "btn btn-primary">
                simpan
           </button>
    </form>            
</x-layout>            