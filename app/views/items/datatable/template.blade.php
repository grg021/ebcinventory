<table id="{{ $id }}" class="{{ $class }}">
    <colgroup>
        @for ($i = 0; $i < count($columns); $i++)
        <col class="con{{ $i }}" />
        @endfor
    </colgroup>
    <thead>
    <tr>
        @foreach($columns as $i => $c)
        <th align="center" valign="middle" class="head{{ $i }}">{{ $c }}</th>
        @endforeach
    </tr>
    </thead>
    <tbody>
    @foreach($data as $d)
    <tr>
        @foreach($d as $dd)
        <td>{{ $dd }}</td>
        @endforeach
    </tr>
    @endforeach
    </tbody>
</table>

@if (!$noScript)
    @include(Config::get('datatable::table.script_view'), array('id' => $id, 'options' => $options, 'callbacks' =>  $callbacks))
@endif

@if (isset($values['table-url']))
<script>
jQuery(document).ready(function(){

    $('#{{$id}}').hover(function() {
        $(this).css('cursor', 'pointer');
    });
    $('#{{$id}}').on('click', 'tbody tr', function(e) {
        $id = e.currentTarget.children[0].innerHTML;
        $url = e.currentTarget.baseURI;
        document.location.href = "{{ $values['table-url'] }}/" + $id + "/edit";
    });

});
</script>
@endif