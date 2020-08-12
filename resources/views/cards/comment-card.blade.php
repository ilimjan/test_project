<tr>
    <td>{{ $data->title }}</td>
    <td>{!! substr($data->description,0,20).'...' !!} </td>
    <td>{{ date("M-d", strtotime($data->created_at)) }}</td>
    @if(!$data->blogs->isEmpty())
        <td>
        <table class="table">
            <thead>
            <tr>
                <th>Заголовок</th>
                <th>Описание</th>
            </tr>
            </thead>
            <tbody>
            @foreach($data->blogs as $data)
                @include('cards.blog-card',compact('data'))
            @endforeach
            </tbody>
        </table>
    </td>
    @endif
</tr>