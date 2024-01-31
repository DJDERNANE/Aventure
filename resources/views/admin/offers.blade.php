<x-app-layout>
    @section('title')
        {{ 'offers' }}
    @endsection
    @section('content')
    <h1>Offers and Consultation</h1>
    <table class="table table-striped-columns">

        <thead>
            <tr>
                <th scope="col">Titre </th>
                <th scope="col">Description</th>
                <th scope="col">Seting</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)


            <tr>
                <td>{{$offer->title}}</td>
                <td>{{$offer->desc}}</td>
                
                <td>
                        <a href="{{route('offers.edit',$offer->id)}}">
                            <button type="button" class="btn btn-primary">Edit</button>
                        </a>
                        <form method="post" action="{{route('offers.destroy',$offer->id)}}">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
            </tr>


           @endforeach


        </tbody>
    </table>
    <div class="add_btn">
            <a href="{{route('offers.create')}}">
                <button type="button" class="btn btn-success">+ ADD</button>
            </a>

        </div>
    @endsection

</x-app-layout>
